<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\ClinicsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="clinics-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <div class="search-container">
        <?= $form->field($model, 'name')->textInput(['placeholder' => 'Klinikalarni qidirish...'])->label(false) ?>
        <button type="submit" class="icon-btn"><i class="fas fa-search"></i></button>
        <button type="reset" class="icon-btn"><i class="fas fa-undo"></i></button>
    </div>


    <?php ActiveForm::end(); ?>

    </div>
