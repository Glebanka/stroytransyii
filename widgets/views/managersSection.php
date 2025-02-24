<?php

use app\widgets\GreenBgWrapper;

GreenBgWrapper::begin([
    'type' => $bgType,
]) ?>

<section class="managers-section">
    <div class="managers-section__header">
        <h2 class="managers-section__title">Ваши менеджеры</h2>
        <p class="managers-section__text">Мы всегда готовы помочь с любым вопросом.</p>
    </div>
    <div class="managers-section__slider">
        <div class="swiper-wrapper wrapper">
            <?php for ($i = 0; $i < 3; $i++): ?>
                <div class="manager swiper-slide">
                    <img src="assets/manager-image.png" class="manager__img">
                    <div class="manager__details">
                        <div class="manager__info">
                            <div class="manager__name">Егоренков Александр</div>
                            <div class="manager__specialization">Менеджер по продажам опалубки</div>
                        </div>
                        <div class="manager__contacts">
                            <a href="tel:89036960271" class="manager__phone">+7 903 696-02-71</a>
                            <a href="mailto:mail@mail.ru" class="manager__email">mail@mail.ru</a>
                        </div>
                    </div>
                    <div class="manager__messengers">
                        <a href="#" target="_blank" class="manager__messenger manager__messenger--telegram">
                            <img src="assets/tg-icon.svg" alt="">
                        </a>
                        <a href="#" target="_blank" class="manager__messenger manager__messenger--whatsapp">
                            <img src="assets/whatsapp-icon.svg" alt="">
                        </a>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<?php GreenBgWrapper::end(); ?>