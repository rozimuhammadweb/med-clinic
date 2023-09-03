<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\TreatmentsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="treatments-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>
    <div class="search-container">
        <?= $form->field($model, 'description')->textInput(['placeholder' => 'Muolajalarni qidirish...'])->label(false) ?>
        <button type="submit" class="icon-btn"><i class="fas fa-search"></i></button>
        <button type="reset" class="icon-btn"><i class="fas fa-undo"></i></button>
    </div>

<!--    --><?php //= $form->field($model, 'id') ?>
<!---->
<!--    --><?php //= $form->field($model, 'appointmentId') ?>
<!---->
<!--    --><?php //= $form->field($model, 'description') ?>
<!---->
<!--    --><?php //= $form->field($model, 'cost') ?>
<!---->
<!--    --><?php //= $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>


    <?php ActiveForm::end(); ?>

</div>
