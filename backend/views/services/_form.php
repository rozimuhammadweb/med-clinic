<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Services $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="services-form">
                    <?php $form = ActiveForm::begin(); ?>
                    <div class="row">
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'clinicId',
                                    [
                                        'template' => '<label>Klinika <span class="login-danger">*</span></label>{input}',
                                    ])->dropDownList(
                                    \yii\helpers\ArrayHelper::map(\common\models\Clinics::find()->all(), 'id', 'name'),
                                    [
                                        'prompt' => 'Klinikani tanlang...',
                                    ]
                                ) ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-5">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'name', [
                                    'template' => '<label>Xizmat nomi <span class="login-danger">*</span></label>{input}',
                                    'labelOptions' => ['class' => 'control-label'],
                                ])->textInput(['class' => 'form-control', 'maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-6">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'description', [
                                        'template' => '<label>Tavsifi<span class="login-danger">*</span></label>{input}',
                                    ]
                                )->textarea(['rows' => 4]) ?>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-xl-3">
                            <?= $form->field($model, 'status',
                                [
                                    'template' => '<label>Statusi<span class="login-danger">*</span></label>{input}',
                                ])->radioList(
                                [
                                    '1' => 'Active',
                                    '0' => 'In Active',

                                ],

                                [
                                    'item' => function ($index, $label, $name, $checked, $value) {
                                        return Html::radio($name, $checked, [
                                            'value' => $value,
                                            'label' => '<label>' . Html::encode($label) . '</label>',
                                            'class' => 'radio-inline',
                                        ]);
                                    }
                                ],
                            ) ?>

                        </div>

                        <!--                        --><?php //= $form->field($model, 'created_at')->textInput() ?>

                        <!--                        --><?php //= $form->field($model, 'updated_at')->textInput() ?>

                        <div class="form-group">
                            <?= Html::submitButton('Qo\'shish', ['class' => 'btn btn-primary px-5']) ?>
                        </div>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
