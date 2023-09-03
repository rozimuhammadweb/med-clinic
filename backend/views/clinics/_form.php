
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Clinics $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="clinics-form ">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">

        <div class="col-12 col-md-6 col-xl-4">
            <div class="form-group local-forms">
                <?= $form->field($model, 'name', [
                    'template' => '<label>Nomi <span class="login-danger">*</span></label>{input}',
                    'labelOptions' => ['class' => 'control-label'],
                ])->textInput(['class' => 'form-control', 'maxlength' => true]) ?>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-5">
            <div class="form-group local-forms">
                <?= $form->field($model, 'address', [
                    'template' => '<label>Manzili <span class="login-danger">*</span></label>{input}',
                    'labelOptions' => ['class' => 'control-label'],
                ])->textInput(['class' => 'form-control', 'maxlength' => true]) ?>
            </div>
            </div>
        </div>
    <div class="col-12 col-md-6 col-xl-3">
        <div class="form-group local-forms">
            <?= $form->field($model, 'contact', [
                'template' => '<label>Aloqa uchun raqam<span class="login-danger">*</span></label>{input}',
                'labelOptions' => ['class' => 'control-label'],
            ])->textInput(['class' => 'form-control', 'maxlength' => true]) ?></div>
    </div>
    </div>

<div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? 'Qo\'shish' : 'Yangilash', ['class' => 'btn btn-primary px-5']) ?>

</div>

    <?php ActiveForm::end(); ?>

</div>
