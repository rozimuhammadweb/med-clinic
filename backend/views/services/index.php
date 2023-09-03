<?php

use common\models\Services;
use yii\bootstrap5\Breadcrumbs;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var common\models\ServicesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Xizmatlar ';
$this->params['breadcrumbs'][] = 'Xizmatlar ro\'yhati';
?>
<div class="row">
    <div class="col-sm-12">
        <div class="card card-table show-entire">
            <div class="card-body">
                <div class="page-table-header mb-2">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="doctor-table-blk">
                                <div class="card-body">
                                    <?= Breadcrumbs::widget([
                                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                                        'options' => ['style' => 'padding: 10px;'],
                                    ]) ?>
                                    <div class="services-index">
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
                                                'style' => 'color: violent; padding-bottom:12px;'
                                            ],
                                            'columns' => [
                                                ['class' => 'yii\grid\SerialColumn'],
                                                [
                                                    'attribute' => 'clinicName',
                                                    'value' => 'clinic.name',
                                                    'label' => 'Shifoxonasi',
                                                    'filter' => Html::activeTextInput($searchModel, 'clinicName', ['class' => 'form-control']), // This adds a filter input for the clinic name
                                                ],
                                                'name',
                                                'description',
                                                [
                                                    'attribute' => 'status',
                                                    'value' => function ($model) {
                                                        return $model->status == 1 ? 'Faol' : 'Faol emas';
                                                    },
                                                    'contentOptions' => function ($model) {
                                                        if ($model->status == 1) {
                                                            return ['class' => 'text-center text-success'];
                                                        }
                                                        return ['class' => 'text-center text-danger'];
                                                    },
                                                    'filter' => Html::activeDropDownList(
                                                        $searchModel,
                                                        'status',
                                                        [
                                                            '' => 'Tanlang...',
                                                            1 => 'Faol',
                                                            0 => 'Faol emas',
                                                        ],
                                                        [
                                                            'class' => 'form-control',
                                                        ]
                                                    ),
                                                    'headerOptions' => ['style' => 'width:150px;'],
                                                ],


                                                [
                                                    'class' => ActionColumn::className(),
                                                    'urlCreator' => function ($action, Services $model, $key, $index, $column) {
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