<?php

use common\models\Doctors;
use yii\bootstrap5\Breadcrumbs;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;


/** @var yii\web\View $this */
/** @var common\models\DoctorsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Shifokorlar';
$this->params['breadcrumbs'][] = 'Shifokorlar ro\'yhati ';

?>

<div class="row">
    <div class="col-sm-12">
        <div class="card card-table show-entire">
            <div class="card-body">
                <div class="page-table-header mb-2">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="doctor-table-blk">
                                <?= Breadcrumbs::widget([
                                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                                    'options' => ['style' => 'padding: 10px;'],
                                ]) ?>
                                <div class="card-body">
                                    <div class="doctors-index">
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

                                                [
                                                    'attribute' => 'clinicName', // Note the change here
                                                    'value' => 'clinic.name',
                                                    'label' => 'Ishlash joyi',
                                                    'filter' => Html::activeTextInput($searchModel, 'clinicName', ['class' => 'form-control']), // This adds a filter input for the clinic name
                                                ],

                                                'firstName',
                                                'lastName',
                                                'specialization',
                                                //'education',
                                                'contact',
                                                //'email:email',
                                                //'dateOfBirth',
                                                //'gender',
                                                //'biography:ntext',
                                                //'image',
                                                //'status',
                                                //'created_at',
                                                //'updated_at',
                                                [
                                                    'class' => ActionColumn::className(),
                                                    'urlCreator' => function ($action, Doctors $model, $key, $index, $column) {
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

<?php
//use yii\bootstrap5\Modal;
//Modal::begin([
//    'title' => '<h2>Hello world</h2>',
//    'id' => 'myModal',
//    'size' => 'modal-lg',
//]);
//
//echo '<div id="modalContent">Content</div>';
//
//Modal::end();

?>

