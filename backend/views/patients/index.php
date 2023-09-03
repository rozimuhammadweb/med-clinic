<?php

use common\models\Patients;
use yii\bootstrap5\Breadcrumbs;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var common\models\PatientsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bemorlar ';
$this->params['breadcrumbs'][] = 'Bemorlar ro\'yhati ';
?>

<div class="row">
    <div class="col-sm-12">
        <div class="card card-table show-entire">
            <div class="card-body">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    'options' => ['style' => 'padding-top: 30px; padding-left:25px'],
                ]) ?>
                <div class="page-table-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="doctor-table-blk">
                                <div class="card-body">
                                    <div class="patients-index">
                                        <?php Pjax::begin(); ?>
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

//                                                        'id',
                                                'firstName',
                                                'lastName',
                                                'dateOfBirth',
                                                'gender',
                                                //'contact',
                                                //'email:email',
                                                //'address',
                                                //'created_at',
                                                //'updated_at',
                                                [
                                                    'class' => ActionColumn::className(),
                                                    'urlCreator' => function ($action, Patients $model, $key, $index, $column) {
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
                                                                'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
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