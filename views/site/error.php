<?php

/** @var yii\web\View $this */

use app\widgets\Breadcrumbs;

$this->title = 'Страницы не существует';
?>

<?= Breadcrumbs::widget(['array_breadcrumb' => ['#' => '404']]) ?>

<div class="error-page">
    <h1>Страницы не существует</h1>
    <div class="error-page__container">
        <p>Ссылка по которой вы перешли содержит ошибку или данная страница удалена.</p>
        <p>Вот основные разделы сайта:</p>
        <a href="/">Главная страница</a>
        <a href="#">Продукция</a>
        <a href="#">Услуги</a>
        <a href="#">Контакты</a>
    </div>
</div>