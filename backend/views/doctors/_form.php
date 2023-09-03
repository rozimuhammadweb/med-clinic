<?php

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\helpers\ArrayHelper;
use \common\models\Clinics;
/** @var yii\web\View $this */
/** @var common\models\Doctors $model */
/** @var yii\widgets\ActiveForm $form */

?>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="doctors-form">
                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="form-group local-forms">
                            <?= $form->field($model, 'clinicId')->dropDownList(
                                ArrayHelper::map(Clinics::find()->all(), 'id', 'name'),
                                [
                                    'prompt' => 'Klinikani tanlang...',
                                ]
                            ) ?>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12 col-md-6 col-xl-6">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'firstName', [
                                    'template' => '<label>Ism <span class="login-danger">*</span></label>{input}',
                                    'labelOptions' => ['class' => 'control-label'],
                                ])->textInput(['class' => 'form-control', 'maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-6">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'lastName', [
                                    'template' => '<label>Familiya <span class="login-danger">*</span></label>{input}',
                                    'labelOptions' => ['class' => 'control-label'],
                                ])->textInput(['class' => 'form-control', 'maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="form-group local-forms">
                            <?= $form->field($model, 'specialization')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'education')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-5">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'contact')->textInput(['maxlength' => true, 'placeholder' => '+99890 302 2003']) ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-5">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'dateOfBirth')->input('date') ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-3">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'gender')->dropDownList([
                                    'Male' => 'Erkak',
                                    'Female' => 'Ayol',
                                ], ['prompt' => 'Jinsni tanlang...']) ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-6">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'imageFile')->fileInput() ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-7">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'biography')->textarea(['rows' => 5]) ?>
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
                                            'class' => 'radio-inline'
                                        ]);
                                    }
                                ]
                            ) ?>

                        </div>

                    </div>
<!--                    --><?php //= $form->field($model, 'created_at')->textInput() ?>
<!--                    --><?php //= $form->field($model, 'updated_at')->textInput() ?>
                    <div class="form-group">
                        <?= Html::submitButton($model->isNewRecord ? 'Qo\'shish' : 'Yangilash', ['class' => 'btn btn-primary px-5']) ?>

                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

