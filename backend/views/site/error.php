<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception $exception*/

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

    <div class="error-box">
        <img class="img-fluid" src="/img/error-01.png" alt="Logo">
        <h3><img class="img-fluid mb-0" src="/img/icons/danger.svg" alt="Logo"> Service Unavailable</h3>
        <p>Siz manzilni noto'g'ri kiritgan bo'lishingiz yoki sahifa ko'chirilgan bo'lishi mumkin.</p>
        <a href="http://b.med/index.php" class="btn btn-primary go-home">Asosiy sahifaga qaytish</a>
    </div>

</div>
