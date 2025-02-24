<?php

use app\widgets\GreenBgWrapper;

GreenBgWrapper::begin([
    'type' => $bgType,
]) ?>
<section class="services-section">
    <h2 class="services-section__title"><?=$title?></h2>
    <div class="services-section__list">
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
</section>
<?php GreenBgWrapper::end(); ?>