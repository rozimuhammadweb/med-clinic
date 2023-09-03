<?php

use yii\bootstrap5\Breadcrumbs;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Treatments $model */

$this->title = 'Ma\'lumotlarini tahrirlash: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Muolajalar > ', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->description, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Tahrirlash';
?>
<div class="treatments-update">

    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        'options' => ['style' => 'padding: 10px;'],
    ]) ?>
    <h1 style="font-size:24px; padding-bottom: 20px; ">Ma'lumotlarini tahrirlash: <span style="color: #0a73bb;"><?= Html::encode($model->description) ?> </span></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
