<?php

use yii\bootstrap5\Breadcrumbs;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Doctors $model */

$this->title = $model->firstName . " " . $model->lastName;
$this->params['breadcrumbs'][] = ['label' => 'Shifokorlar >', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="doctors-view">
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        'options' => ['style' => 'padding: 5px;'],
    ]) ?>
    <h1><?= Html::encode($this->title) ?></h1>

    <p class="py-2">
        <?= Html::a('Tahrirlash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary ']) ?>
        <?= Html::a('O\'chirish', ['delete', 'id' => $model->id], [ 'class' => 'btn btn-danger ',
            'data' => [
                'confirm' => 'Ushbu ma\'lumotni o\'chirmoqchimisiz ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'clinicId',
            'firstName',
            'lastName',
            'specialization',
            'education',
            'contact',
            'email:email',
            'dateOfBirth',
            'gender',
            'biography:ntext',
            'image',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
