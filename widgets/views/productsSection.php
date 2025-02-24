<?php

use app\widgets\GreenBgWrapper;

GreenBgWrapper::begin([
    'type' => $bgType,
]) ?>
<section class="company-products">
    <div class="company-products__container">
        <div class="company-products__text-container">
            <h2><?=$title?></h2>
            <?php if ($text != ''): ?>
                <p><?= $text ?></p>
            <?php endif; ?>
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