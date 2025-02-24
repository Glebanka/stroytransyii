<?php
use app\widgets\GreenBgWrapper;
GreenBgWrapper::begin([
    'type' => 'to-right',
]) ?>
<section class="partners">
    <div class="partners__text-block">
        <h2 class="partners__title">Партнеры</h2>
        <p class="partners__text">Доверие клиентов — наш главный приоритет в работе.<br>Мы гордимся тем, что партнеры
            нам доверяют<br> и работают с нами долгие годы.</p>
    </div>
    <div class="partners__slider">
        <div class="partners__list swiper-wrapper">
            <div class="partner swiper-slide">
                <img src="assets/partner-logo.png" alt="Partner 1" class="partner__img">
            </div>
            <div class="partner swiper-slide">
                <img src="assets/partner-logo.png" alt="Partner 2" class="partner__img">
            </div>
            <div class="partner swiper-slide">
                <img src="assets/partner-logo.png" alt="Partner 3" class="partner__img">
            </div>
            <div class="partner swiper-slide">
                <img src="assets/partner-logo.png" alt="Partner 4" class="partner__img">
            </div>
            <div class="partner swiper-slide">
                <img src="assets/partner-logo.png" alt="Partner 5" class="partner__img">
            </div>
            <div class="partner swiper-slide">
                <img src="assets/partner-logo.png" alt="Partner 6" class="partner__img">
            </div>
            <div class="partner swiper-slide">
                <img src="assets/partner-logo.png" alt="Partner 7" class="partner__img">
            </div>
        </div>
    </div>
</section>
<?php GreenBgWrapper::end(); ?>