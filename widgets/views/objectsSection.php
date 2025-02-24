<?php

use app\widgets\GreenBgWrapper;

GreenBgWrapper::begin([
    'type' => $bgType,
]) ?>
<section class="objects-section">
    <div class="objects-section__text-container">
        <h2 class="objects-section__title"><?= $title ?></h2>
        <?php if ($text != ''): ?>
            <p class="objects-section__text"><?= $text ?></p>
        <?php endif; ?>
    </div>
    <div class="objects-section__wrapper">
        <a href="#" class="object">
            <div class="object__image-overlay">
                <img src="assets/object-image.png" alt="" class="object__image">
            </div>
            <div class="object__info">
                <div class="object__categories">
                    <div class="object__category">Металлоконструкции</div>
                    <div class="object__category">Московская область</div>
                    <div class="object__category">2018</div>
                </div>
                <p class="object__title">Пешеходный мост</p>
                <p class="object__text">Металлоконструкции для строительства пешеходных мостов через Варшавское шоссе.
                </p>
            </div>
        </a>
        <a href="#" class="object">
            <div class="object__image-overlay">
                <img src="assets/object-image.png" alt="" class="object__image">
            </div>
            <div class="object__info">
                <div class="object__categories">
                    <div class="object__category">Металлоконструкции</div>
                    <div class="object__category">Московская область</div>
                    <div class="object__category">2018</div>
                </div>
                <p class="object__title">Жилой комплекс «Гусарская баллада»</p>
                <p class="object__text">Комплекс состоит из 67 таунхаусов, 21 жилого дома с высотностью от 12-ти до
                    17-ти
                    этажей.</p>
            </div>
        </a>
        <a href="#" class="object">
            <div class="object__image-overlay">
                <img src="assets/object-image.png" alt="" class="object__image">
            </div>
            <div class="object__info">
                <div class="object__categories">
                    <div class="object__category">Металлоконструкции</div>
                    <div class="object__category">Московская область</div>
                    <div class="object__category">2018</div>
                </div>
                <p class="object__title">Жилой комплекс «Гусарская баллада»</p>
                <p class="object__text">Комплекс состоит из 67 таунхаусов, 21 жилого дома с высотностью от 12-ти до
                    17-ти
                    этажей.</p>
            </div>
        </a>
    </div>
    <a href="#" class="btn objects-section__btn">Посмотреть все объекты</a>
</section>
<style>
    .objects-section {
        --objects-section-align: <?= $contentAlign ?>;
    }
</style>
<?php GreenBgWrapper::end(); ?>