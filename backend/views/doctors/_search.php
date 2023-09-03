<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\DoctorsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="doctors-search">

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

    <!--        --><?php //= $form->field($model, 'id') ?>
<!--    -->
<!--        --><?php //= $form->field($model, 'clinicId') ?>
<!--    -->
<!--        --><?php //= $form->field($model, 'firstName') ?>
<!--    -->
<!--        --><?php //= $form->field($model, 'lastName') ?>

<!--        --><?php //= $form->field($model, 'specialization') ?>

    <?php // echo $form->field($model, 'education') ?>

    <?php // echo $form->field($model, 'contact') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'dateOfBirth') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'biography') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php ActiveForm::end(); ?>

</div>
