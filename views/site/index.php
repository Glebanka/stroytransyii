<?php

use app\widgets\AdvantagesSection;
use app\widgets\ArticlesSection;
use app\widgets\GreenBgWrapper;
use app\widgets\ObjectsSection;
use app\widgets\PartnersSection;
use app\widgets\PriceRequestSection;
use app\widgets\ReviewsSection;
use app\widgets\ServicesSection;

/** @var yii\web\View $this */

$this->title = 'Стройтрансметал';
?>

<section class="intro-section">
  <div class="intro-section__text">
    <div class="intro-section__info">
      <h2 class="intro-section__info-title">Опалубка колонн</h2>
      <div class="intro-section__info-text">
        Крупнощитовая опалубка колонн<br />
        успешно решает задачи возникающие<br />
        при строительстве современных зданий.
      </div>
    </div>
    <button class="btn">Подробнее</button>
  </div>
  <div class="intro-section__slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide intro-section__slider-item">
        <img class="intro-section__slider-img" src="assets/intro-section-img.png" alt="">
      </div>
      <div class="swiper-slide intro-section__slider-item">
        <img class="intro-section__slider-img" src="assets/intro-section-img.png" alt="">
      </div>
      <div class="swiper-slide intro-section__slider-item">
        <img class="intro-section__slider-img" src="assets/intro-section-img.png" alt="">
      </div>
    </div>
    <div class="intro-section__slider-nav">
      <div class="slider-arrow left">
        <img src="assets/slider-arrow.svg" alt="" class="slider-arrow__img">
      </div>
      <div class="slider-arrow right">
        <img src="assets/slider-arrow.svg" alt="" class="slider-arrow__img">
      </div>
    </div>
  </div>
</section>

<?php GreenBgWrapper::begin([
  'type' => 'to-left',
]) ?>
<section class="company-products">
  <div class="company-products__container">
    <div class="company-products__text-container">
      <h2>Опалубочные системы</h2>
      <p>ООО «Промстройкомплект» производит и продает опалубочные системы.</p>
      <p>Для комплектации систем в наличии имеется <a href="#">ламинированная<br> фанера</a>, двутавровые
        балки, все необходимые комплектующие.</p>
    </div>
    <div class="company-products__slider">
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
  <div class="company-products__container">
    <div class="company-products__text-container">
      <h2>Мостовые конструкции</h2>
      <p>Опалубка для мостостроения:</p>
      <ul>
        <li>мостовые опорные подмости (МОП-7, МОП-12, МОП-20)</li>
        <li>архитектурные формообразователи колонн</li>
        <li>консольно-переставные подмости</li>
        <li>мостовые опорные подмости (МОП-7, МОП-12, МОП-20)</li>
        <li>архитектурные формообразователи колонн</li>
        <li>консольно-переставные подмости</li>
      </ul>
      <p>Опалубка для мостостроения:</p>
      <ul>
        <li>мостовые опорные подмости (МОП-7, МОП-12, МОП-20)</li>
        <li>архитектурные формообразователи колонн</li>
        <li>консольно-переставные подмости</li>
        <li>мостовые опорные подмости (МОП-7, МОП-12, МОП-20)</li>
        <li>архитектурные формообразователи колонн</li>
        <li>консольно-переставные подмости</li>
      </ul>
    </div>
    <div class="company-products__slider">
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
  <div class="company-products__container">
    <div class="company-products__text-container">
      <h2>Металлоконструкции</h2>
      <p>Изготовление металлоконструкций:</p>
      <ul>
        <li>мостовые опорные подмости (МОП-7, МОП-12, МОП-20)</li>
        <li>архитектурные формообразователи колонн</li>
        <li>консольно-переставные подмости</li>
        <li>мостовые опорные подмости (МОП-7, МОП-12, МОП-20)</li>
        <li>архитектурные формообразователи колонн</li>
        <li>консольно-переставные подмости</li>
        <li>мостовые опорные подмости (МОП-7, МОП-12, МОП-20)</li>
        <li>архитектурные формообразователи колонн</li>
        <li>консольно-переставные подмости</li>
        <li>мостовые опорные подмости (МОП-7, МОП-12, МОП-20)</li>
        <li>архитектурные формообразователи колонн</li>
        <li>консольно-переставные подмости</li>
      </ul>
    </div>
    <div class="company-products__slider">
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
</section>
<?php GreenBgWrapper::end(); ?>

<?= ObjectsSection::widget([
  'text' => 'Объекты строительства: сельскохозяйственные, жилищные, автодорожные, энергетические, культурные, мосты, торгово-развлекательные центры, метро, в которых мы принимали участие.'
]); ?>

<?= PriceRequestSection::widget(); ?>

<?= ServicesSection::widget(['title' => 'Наши услуги']) ?>

<?= AdvantagesSection::widget(['bgType' => 'to-left']) ?>

<?= PartnersSection::widget() ?>

<?= ReviewsSection::widget(['bgType' => 'to-left']) ?>

<?= ArticlesSection::widget() ?>