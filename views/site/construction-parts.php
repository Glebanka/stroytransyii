<?php

/** @var yii\web\View $this */

use app\widgets\ArticlesSection;
use app\widgets\Breadcrumbs;
use app\widgets\ManagersSection;

$this->title = 'Стройтрансметал';
?>

<?= Breadcrumbs::widget(['array_breadcrumb' => ['#' => 'Комплектующие']]) ?>

<div class="constuction-parts-page">
    <h1>Комплектующие и элементы</h1>

    <div class="constuction-parts-page__container">
        <label for="constuction-parts-page__select" class="constuction-parts-page__select-container">
            <select id="constuction-parts-page__select" class="constuction-parts-page__select">
                <option value="Все">Все</option>
                <option value="Не все">Не все</option>
            </select>
        </label>
        <div class="constuction-parts-page__wrapper">
            <?php for ($i = 0; $i < 10; $i++): ?>
                <div class="construction-part swiper-slide">
                    <img src="assets/Placeholder Image.png" class="construction-part__img">
                    <div class="construction-part__details">
                        <p class="construction-part__title">Название</p>
                        <p class="construction-part__price">2 550 ₽</p>
                    </div>
                    <p class="construction-part__description">Описание</p>
                    <button class="btn construction-part__btn">Заказать</button>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</div>

<?= ManagersSection::widget(['bgType' => 'to-left']); ?>

<?= ArticlesSection::widget() ?>