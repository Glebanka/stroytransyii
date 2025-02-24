<?php

use app\widgets\GreenBgWrapper;

GreenBgWrapper::begin([
    'type' => $bgType,
]) ?>
<section class="advantages">
    <div class="advantages__text-block">
        <h2 class="advantages__title">Преимущества</h2>
        <p class="advantages__text">Мы предлагаем высококачественные услуги и продукцию, которые помогут вам в
            строительстве и других проектах.</p>
    </div>
    <div class="advantages__list">
        <div class="advantage">
            <div class="advantage__percentage">95%</div>
            <h3 class="advantage__title">Высокое качество</h3>
            <p class="advantage__text">Мы гарантируем высокое качество нашей продукции и услуг.</p>
        </div>
        <div class="advantage">
            <div class="advantage__percentage">90%</div>
            <h3 class="advantage__title">Надежность</h3>
            <p class="advantage__text">Наша продукция и услуги надежны и долговечны.</p>
        </div>
        <div class="advantage">
            <div class="advantage__percentage">85%</div>
            <h3 class="advantage__title">Опыт</h3>
            <p class="advantage__text">Мы имеем многолетний опыт в строительной отрасли.</p>
        </div>
        <div class="advantage">
            <div class="advantage__percentage">80%</div>
            <h3 class="advantage__title">Индивидуальный подход</h3>
            <p class="advantage__text">Мы предлагаем индивидуальные решения для каждого клиента.</p>
        </div>
    </div>
</section>
<?php GreenBgWrapper::end(); ?>