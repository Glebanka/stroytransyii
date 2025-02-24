<?php use app\widgets\GreenBgWrapper;
GreenBgWrapper::begin([
    'type' => 'to-right',
]) ?>

<section class="equipment-section">
    <h2 class="equipment-section__title">Оборудование</h2>
    <div class="equipment-section__text">Высокоточное и современное оборудование для производства металлоконструкций и опалубочных систем</div>
    <div class="equipment-section__slider">
        <div class="swiper-wrapper wrapper">
            <?php for ($i = 0; $i < 5; $i++): ?>
                <a href="#" class="equipment-section__item swiper-slide">
                    <img src="assets/equipment-image.png" alt="Equipment Image <?php echo $i; ?>" class="equipment-section__img">
                    <div class="equipment-section__item-text-container">
                        <h3 class="equipment-section__item-title">Универсальные комбинированные пресс-ножницы GEKA HYDRACROP 80S</h3>
                        <div class="equipment-section__item-text">Пробивка и порезка профиля и сортового проката</div>
                        <div class="equipment-section__item-country">Испания</div>
                    </div>
                </a>
            <?php endfor; ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <a href="#" class="btn equipment-section__btn">все оборудование</a>
</section>

<?php GreenBgWrapper::end(); ?>