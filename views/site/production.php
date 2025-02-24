<?php

use app\widgets\ArticlesSection;
use app\widgets\Breadcrumbs;
use app\widgets\EquipmentSection;
use app\widgets\ObjectsSection;
use app\widgets\PriceRequestSection;

/** @var yii\web\View $this */
$this->title = 'Стройтрансметал';
?>

<?= Breadcrumbs::widget(['array_breadcrumb' => ['' => 'Опалубочные системы']]) ?>

<div class="products-page">
    <h1>Опалубочные системы</h1>
    <div class="products-page__container">
        <div class="products-page__text-container">
            <p>ООО «Промстройкомплект» производит и продает опалубочные системы.</p>
            <p>Для комплектации систем в наличии имеется <a href="#">ламинированная<br> фанера</a>, двутавровые
                балки, все необходимые комплектующие.</p>
        </div>
        <div class="products-page__slider">
            <div class="swiper-wrapper wrapper">
                <a href="#" class="company-product swiper-slide">
                    <div class="company-product__overlay-img">
                        <img src="assets/image.png" class="company-product__img">
                    </div>
                    <p class="company-product__title">Опалубка перекрытий</p>
                </a>
                <a href="#" class="company-product swiper-slide">
                    <div class="company-product__overlay-img">
                        <img src="assets/image.png" class="company-product__img">
                    </div>
                    <p class="company-product__title">Балочно-ригельная опалубка</p>
                </a>
                <a href="#" class="company-product swiper-slide">
                    <div class="company-product__overlay-img">
                        <img src="assets/image.png" class="company-product__img">
                    </div>
                    <p class="company-product__title">Опалубка перекрытий</p>
                </a>
                <a href="#" class="company-product swiper-slide">
                    <div class="company-product__overlay-img">
                        <img src="assets/image.png" class="company-product__img">
                    </div>
                    <p class="company-product__title">Опалубка перекрытий</p>
                </a>
                <a href="#" class="company-product swiper-slide">
                    <div class="company-product__overlay-img">
                        <img src="assets/image.png" class="company-product__img">
                    </div>
                    <p class="company-product__title">Опалубка перекрытий</p>
                </a>
                <a href="#" class="company-product swiper-slide">
                    <div class="company-product__overlay-img">
                        <img src="assets/image.png" class="company-product__img">
                    </div>
                    <p class="company-product__title">Опалубка перекрытий</p>
                </a>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>

<?= ObjectsSection::widget([
  'text' => 'Объекты строительства: сельскохозяйственные, жилищные, автодорожные, энергетические, культурные, мосты, торгово-развлекательные центры, метро, в которых мы принимали участие.'
]); ?>

<?= PriceRequestSection::widget(); ?>

<?= EquipmentSection::widget(); ?>

<?= ArticlesSection::widget([
    'bgType'=> 'to-left'
])?>