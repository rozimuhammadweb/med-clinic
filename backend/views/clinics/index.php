<?php

use common\models\Clinics;
use yii\bootstrap5\Breadcrumbs;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var common\models\ClinicsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Klinikalar';
$this->params['breadcrumbs'][] = 'Klinikalar ro\'yhati';
?>

<div class="row ">
    <div class="col-sm-12">
        <div class="card card-table show-entire">
            <div class="card-body">
                <div class="page-table-header mb-2">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="doctor-table-blk">
                                <div class="card-body">
                                    <div class="clinics-index">
                                        <?php Pjax::begin(); ?>
                                        <?= Breadcrumbs::widget([
                                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                                            'options' => ['style' => 'padding: 10px;'],
                                        ]) ?>
                                        <div class="row justify-content-between">
                                            <div class="col-lg-2 ">
                                                <?= Html::a('Qo\'shish', ['create'], ['class' => 'btn btn-primary px-5 border-3']) ?></div>
                                            <div
                                                class="col-lg-8">    <?= $this->render('_search', ['model' => $searchModel]); ?></div>
                                        </div>


                                        <?= GridView::widget([
                                            'dataProvider' => $dataProvider,
                                            'filterModel' => $searchModel,
                                            'summary' => '{totalCount} ta ma\'lumotdan {begin} - dan {end} - gacha koʻrsatilmoqda',
                                            'summaryOptions' => [
                                                'style' => 'color: violent; padding-bottom:8px;'
                                            ],
                                            'columns' => [
                                                ['class' => 'yii\grid\SerialColumn'],
                                                'name',
                                                'address',
                                                'contact',
                                                [
                                                    'class' => ActionColumn::className(),
                                                    'urlCreator' => function ($action, Clinics $model, $key, $index, $column) {
                                                        return Url::toRoute([$action, 'id' => $model->id]);
                                                    },
                                                    'buttons' => [
                                                        'view' => function ($url, $model) {
                                                            return Html::a('<i class="fa fa-eye"></i>', $url, [
                                                                'title' => Yii::t('yii', 'View'),
                                                                'style' => 'color:green;' // Add your styles here
                                                            ]);
                                                        },
                                                        'update' => function ($url, $model) {
                                                            return Html::a('<i class="fa fa-pencil"></i>', $url, [
                                                                'title' => Yii::t('yii', 'Update'),
                                                                'style' => 'color:blue;' // Add your styles here
                                                            ]);
                                                        },
                                                        'delete' => function ($url, $model) {
                                                            return Html::a('<i class="fa fa-trash"></i>', $url, [
                                                                'title' => Yii::t('yii', 'Delete'),
                                                                'style' => 'color:red;', // Add your styles here
                                                                'data-confirm' => Yii::t('yii', 'Ushbu ma\'lumotni o\'chirmoqchimisiz?'),
                                                                'data-method' => 'post',
                                                            ]);
                                                        },
                                                    ],
                                                ],
                                            ],
                                        ]); ?>
                                        <?php Pjax::end(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>