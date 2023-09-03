<?php

use yii\bootstrap5\Breadcrumbs;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Doctors $model */

$this->title = 'Ma\'lumotlarini tahrirlash: ' . $model->firstName . ' '. $model->lastName;
$this->params['breadcrumbs'][] = ['label' => 'Shifokorlar >', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->firstName. ' ' . $model->lastName .' >', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Tahrirlash';
?>
<div class="doctors-update">
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        'options' => ['style' => 'padding: 10px;'],
    ]) ?>
    <h1 style="font-size:24px; padding-bottom: 20px; ">Ma'lumotlarini tahrirlash <span style="color: #0a73bb;"><?= Html::encode($model->firstName) ?></span> <span style="color: #0a73bb;"><?= Html::encode($model->lastName) ?></span></h1>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
