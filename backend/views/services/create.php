<?php

use yii\bootstrap5\Breadcrumbs;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Services $model */

$this->title = 'Xizmat Qo`shish';
$this->params['breadcrumbs'][] = ['label' => 'Xizmatlar >', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-create">

    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        'options' => ['style' => 'padding: 10px;'],
    ]) ?>
    <h1 style="font-size: 20px; padding-bottom: 25px; padding-left: 7px; color: #0a73bb"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
