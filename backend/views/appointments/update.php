<?php

use yii\bootstrap5\Breadcrumbs;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Appointments $model */

$this->title = 'Ma\'lumotlarini tahrirlash: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Uchrashuvlar >', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id . ' >','url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Tahrirlash';
?>
<div class="appointments-update">

    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        'options' => ['style' => 'padding: 10px;'],
    ]) ?>
    <h1 style="font-size:24px; padding-bottom: 20px; ">Ma'lumotlarini tahrirlash: <span style="color: #0a73bb;"><?= Html::encode($model->id) ?> </span></h1>


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
