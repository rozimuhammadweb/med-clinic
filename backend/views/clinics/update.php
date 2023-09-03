<?php

use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;

/** @var yii\web\View $this */
/** @var common\models\Clinics $model */

$this->title = 'Ma\'lumotlarini tahrirlash: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Klinikalar >', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name.' >', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Tahrirlash';
?>
<div class="clinics-update">
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        'options' => ['style' => 'padding: 10px;'],
    ]) ?>
    <h1 style="font-size:24px; padding-bottom: 20px; ">Ma'lumotlarini tahrirlash: <span style="color: #0a73bb;"><?= Html::encode($model->name) ?> </span></h1>


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
