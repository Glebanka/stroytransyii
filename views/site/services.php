<?php

/** @var yii\web\View $this */

use app\widgets\ArticlesSection;
use app\widgets\Breadcrumbs;
use app\widgets\ManagersSection;

$this->title = 'Стройтрансметал';
?>

<?= Breadcrumbs::widget(['array_breadcrumb' => ['#' => 'Услуги']]) ?>

<div class="services-page">
    <h1>Услуги</h1>
    <div class="services-page__wrapper">
        <div class="service-item">
            <div class="service-item-info">
                <div class="service-item-counter">01</div>
                <h3 class="service-item-title">Горячее цинкование</h3>
            </div>
            <img class="service-item-img" src="assets/service-img.png" alt="Service 1">
        </div>
        <div class="service-item">
            <div class="service-item-info">
                <div class="service-item-counter">02</div>
                <h3 class="service-item-title">Обучение</h3>
            </div>
            <img class="service-item-img" src="assets/service-img.png" alt="Service 1">
        </div>
        <div class="service-item">
            <div class="service-item-info">
                <div class="service-item-counter">03</div>
                <h3 class="service-item-title">Плазменная резка</h3>
            </div>
            <img class="service-item-img" src="assets/service-img.png" alt="Service 1">
        </div>
    </div>
</div>

<?= ManagersSection::widget(['bgType' => 'to-left']); ?>

<?= ArticlesSection::widget() ?>