<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\PatientsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="patients-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <div class="search-container">
        <?= $form->field($model, 'firstName')->textInput(['placeholder' => 'Shiforlarni qidirish...'])->label(false) ?>
        <button type="submit" class="icon-btn"><i class="fas fa-search"></i></button>
        <button type="reset" class="icon-btn"><i class="fas fa-undo"></i></button>
    </div>


<!--    --><?php //=  $form->field($model, 'id') ?>
<!---->
<!--    --><?php //=  $form->field($model, 'firstName') ?>
<!---->
<!--    --><?php //=  $form->field($model, 'lastName') ?>
<!---->
<!--    --><?php //=  $form->field($model, 'dateOfBirth') ?>
<!---->
<!--    --><?php //= $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'contact') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>



    <?php ActiveForm::end(); ?>

</div>
