<?php
use app\widgets\GreenBgWrapper;

GreenBgWrapper::begin([
    'type' => $bgType,
]) ?>

<section class="reviews">
    <h2 class="reviews__title">Отзывы</h2>
    <div class="reviews__slider">
        <div class="reviews__slider-wrapper swiper-wrapper">
            <div class="swiper-slide review">
                <img src="assets/review-image.png" alt="Review 1" class="review__img">
                <p class="review__text">ООО «1-я ОПАЛУБОЧНАЯ КОМПАНИЯ» выражает благодарность в Вашем лице всему
                    коллективу
                    завода-изготовителя ООО «Промстройкомплект» за взаимовыгодное и плодотворное сотрудничество в
                    области
                    поставок опалубочных систем
                    металлоконструкций.</p>
                <div class="review__author">
                    <p class="review__author-name">Иван Иванов</p>
                    <p class="review__author-company">Компания "СтройИнвест"</p>
                </div>
            </div>
            <div class="swiper-slide review">
                <img src="assets/review-image.png" alt="Review 2" class="review__img">
                <p class="review__text">Профессиональный подход и высокое качество. Рекомендую!</p>
                <div class="review__author">
                    <p class="review__author-name">Анна Смирнова</p>
                    <p class="review__author-company">Компания "СтройПроект"</p>
                </div>
            </div>
        </div>
        <div class="reviews__slider-nav">
            <div class="slider-arrow-empty left">
                <img src="assets/slider-arrow-mini.svg" alt="Previous" class="slider-arrow-empty__img">
            </div>
            <div class="slider-arrow-empty right">
                <img src="assets/slider-arrow-mini.svg" alt="Next" class="slider-arrow-empty__img">
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<?php GreenBgWrapper::end(); ?>