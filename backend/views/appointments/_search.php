<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/** @var yii\web\View $this */
/** @var common\models\AppointmentsSearch $model */
/** @var yii\widgets\ActiveForm $form */

$searchOptions = [
    'patientName' => 'Bemorni ismi orqali qidirish...',
    'doctorName' => 'Shifokorni ismi orqali qidirish...',
    'serviceName' => 'Xizmat nomi orqali qidirish...',
];
?>

<div class="appointments-search">
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>




    <div class="search-container">
        <?= $form->field($model, 'searchType')->dropDownList($searchOptions, ['prompt' => 'Qidirish turini tanlang...'])->label(false) ?>
        <?= $form->field($model, 'firstName')->textInput(['placeholder' => 'Qidirish...'])->label(false) ?>
        <button type="submit" class="icon-btn"><i class="fas fa-search"></i></button>
        <button type="reset" class="icon-btn"><i class="fas fa-undo"></i></button>
    </div>




    <!--    --><?php //= $form->field($model, 'id') ?>
    <!---->
    <!--    --><?php //= $form->field($model, 'patientId') ?>
    <!---->
    <!--    --><?php //= $form->field($model, 'doctorId') ?>
    <!---->
    <!--    --><?php //= $form->field($model, 'serviceId') ?>
    <!---->
    <!--    --><?php //= $form->field($model, 'appointmentDate') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>


    <?php ActiveForm::end(); ?>

</div>
