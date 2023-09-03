<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Treatments $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="treatments-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row pt-4">
        <div class="col-12 col-md-6 col-xl-4">
            <div class="form-group local-forms">
                <?= $form->field($model, 'appointmentId',
                    [
                        'template' => '<label>Uchrashuvlar ro\'yhati <span class="login-danger">*</span></label>{input}',
                    ])->dropDownList(
                    \yii\helpers\ArrayHelper::map(\common\models\Appointments::find()->all(), 'id', 'notes'),
                    [
                        'prompt' => 'Uchrashuvni tanlang...',
                    ]
                ) ?>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-4">
            <?= $form->field($model, 'cost', [
                'template' => '
             <div class="input-group">
                 <div class="input-group-prepend"><span class="input-group-text">$</span></div>{input}<span class="input-group-text">.00</span>
             </div>',
            ])->input('number', ['maxlength' => true, 'class' => 'form-control', 'placeholder' => 'Xizmat narxi']) ?>
        </div>


        <div class="col-12 col-md-6 col-xl-6">
            <div class="form-group local-forms">
                <?= $form->field($model, 'description',[
                        'template' => '<label>Tavsifi<span class="login-danger">*</span></label>{input}',
                    ]
                )->textarea(['rows' => 4]) ?>
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-5">
            <div class="form-group local-forms">
                <?= $form->field($model, 'date',[
                    'template' => '<label>Sana<span class="login-danger">*</span></label>{input}',
                ])->input('date') ?>
            </div>
        </div>
<!--    --><?php //= $form->field($model, 'created_at')->textInput() ?>

<!--    --><?php //= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-primary px-5']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
