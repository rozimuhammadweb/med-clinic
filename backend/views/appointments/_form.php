<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Patients;
use  yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var common\models\Appointments $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="appointments-form">
    <div class="row">
        <?php $form = ActiveForm::begin(); ?>
        <div class="row pt-4">
            <div class="col-12 col-md-6 col-xl-4">
                <div class="form-group local-forms">
                    <?= $form->field($model, 'patientId',
                        [
                            'template' => '<label>Bemorlar<span class="login-danger">*</span></label>{input}',
                            'labelOptions' => ['class' => 'control-label'],
                        ])->dropDownList(
                        ArrayHelper::map(Patients::find()->all(), 'id', 'firstName'),
                        [
                            'prompt' => 'Bemorning ismi...',
                        ]
                    ) ?>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <div class="form-group local-forms">
                    <?= $form->field($model, 'doctorId',
                        [
                            'template' => '<label>Shifokorlar<span class="login-danger">*</span></label>{input}',
                            'labelOptions' => ['class' => 'control-label'],
                        ])->dropDownList(
                        ArrayHelper::map(\common\models\Doctors::find()->where(['status' => 1])->all(), 'id', 'firstName'),
                        [
                            'prompt' => 'Doktorning ismi...',
                        ]
                    ) ?>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <div class="form-group local-forms">
                    <?= $form->field($model, 'serviceId',
                        [
                            'template' => '<label>Xizmatlar<span class="login-danger">*</span></label>{input}',
                            'labelOptions' => ['class' => 'control-label'],
                        ])->dropDownList(
                        ArrayHelper::map(\common\models\Services::find()->where(['status' => 1])->all(), 'id', 'name'),
                        [
                            'prompt' => 'Xizmat turi...',
                        ]
                    ) ?>

                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-5">
                <div class="form-group local-forms">
                    <?= $form->field($model, 'appointmentDate',
                        [
                            'template' => '<label>Muolaja sanasi<span class="login-danger">*</span></label>{input}',
                            'labelOptions' => ['class' => 'control-label'],
                        ])->input('date' ) ?>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-8">
                <div class="form-group local-forms">
                    <?= $form->field($model, 'notes',[
                            'template' => '<label>Eslatmalar<span class="login-danger">*</span></label>{input}',
                        ]
                    )->textarea(['rows' => 4]) ?>
                </div>
            </div>
<!--            --><?php //= $form->field($model, 'created_at')->textInput() ?>
<!--            --><?php //= $form->field($model, 'updated_at')->textInput() ?>
            <div class="form-group">
                <?= Html::submitButton('Qo\'shish', ['class' => 'btn btn-primary px-5']) ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
