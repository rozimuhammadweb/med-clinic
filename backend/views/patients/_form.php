<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Patients $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="patients-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">

        <div class="col-12 col-md-6 col-xl-5">
            <div class="form-group local-forms">
                <?= $form->field($model, 'firstName', [
                    'template' => '<label>Ism <span class="login-danger">*</span></label>{input}',
                    'labelOptions' => ['class' => 'control-label'],
                ])->textInput(['class' => 'form-control', 'maxlength' => true]) ?>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-5">
            <div class="form-group local-forms">
                <?= $form->field($model, 'lastName', [
                    'template' => '<label>Familiya <span class="login-danger">*</span></label>{input}',
                    'labelOptions' => ['class' => 'control-label'],
                ])->textInput(['class' => 'form-control', 'maxlength' => true]) ?>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-4">
            <div class="form-group local-forms">
                <?= $form->field($model, 'dateOfBirth',
                    [
                        'template' => '<label>Tug\'ildan sana <span class="login-danger">*</span></label>{input}',
                        'labelOptions' => ['class' => 'control-label'],
                    ])->input('date' ) ?>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div class="form-group local-forms">
                <?= $form->field($model, 'gender',
                    [
                        'template' => '<label>Jinsi <span class="login-danger">*</span></label>{input}',
                        'labelOptions' => ['class' => 'control-label'],
                    ])->dropDownList([
                    'Male' => 'Erkak',
                    'Female' => 'Ayol',
                ], ['prompt' => 'Jinsni tanlang...']) ?>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-5">
            <div class="form-group local-forms">
            <?= $form->field($model, 'contact', [
                'template' => '<label>Mobil raqam <span class="login-danger">*</span></label>{input}',
                'labelOptions' => ['class' => 'control-label'],
            ])->textInput(['class' => 'form-control', 'maxlength' => true,'placeholder' => '+998 (90) 302 2003']) ?>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-4">
            <div class="form-group local-forms">
                <?= $form->field($model, 'email',
                    [
                        'template' => '<label>Elektron pochta <span class="login-success">*</span></label>{input}',
                        'labelOptions' => ['class' => 'control-label'],
                    ])->textInput(['maxlength' => true, 'placeholder' => 'example@gmail.com']) ?>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-6">
            <div class="form-group local-forms">
                <?= $form->field($model, 'address',
                    [
                        'template' => '<label>Manzili <span class="login-danger">*</span></label>{input}',
                        'labelOptions' => ['class' => 'control-label'],
                    ])->textInput(['maxlength' => true]) ?>
            </div>
        </div>

<!--    --><?php //= $form->field($model, 'created_at')->textInput() ?>

<!--    --><?php //= $form->field($model, 'updated_at')->textInput() ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Qo\'shish' : 'Yangilash', ['class' => 'btn btn-primary px-5']) ?>

        </div>

    <?php ActiveForm::end(); ?>
    </div>
</div>
