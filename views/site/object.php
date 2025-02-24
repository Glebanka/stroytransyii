<?php

use app\widgets\ArticlesSection;
use app\widgets\Breadcrumbs;
use app\widgets\ManagersSection;
use app\widgets\ObjectsSection;
use app\widgets\ProductsSection;

/** @var yii\web\View $this */
$this->title = 'Стройтрансметал';
?>

<?= Breadcrumbs::widget(['array_breadcrumb' => ['#' => 'Объекты', '' => 'Оплаубка для жилого комплекса «Гусарская баллада»']]) ?>

<section class="offer">
    <h1>Оплаубка для жилого комплекса «Гусарская баллада»</h1>
    <div class="offer__container">
        <div class="offer__slider">
            <div class="swiper-wrapper offer__wrapper">
                <img src="assets/object-image2.png" alt="Image 1" class="swiper-slide offer__slider-image">
                <img src="assets/object-image2.png" alt="Image 2" class="swiper-slide offer__slider-image">
                <img src="assets/object-image2.png" alt="Image 3" class="swiper-slide offer__slider-image">
                <img src="assets/object-image2.png" alt="Image 4" class="swiper-slide offer__slider-image">
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="offer__info">
            <div class="offer__description">
                <h2>Расположение объекта</h2>
                <p>Жилой комплекс «Гусарская баллада» строится в Одинцовском районе Московской области. Уникальность этого комплекса в том, что он, по сути, является целым микрорайоном, с собственной инфраструктурой и удобным транспортным расположением – между двумя скоростными автомагистралями – Минским и Можайским шоссе.</p>
                <h2>Инфраструктура</h2>
                <p>Жилой комплекс состоит из 67 таунхаусов, 21 жилого дома с высотностью от 12-ти до 17-ти этажей. Большая часть домов возводится по технологии монолитного строительства, а затем обкладывается кирпичом. Развитая инфраструктура полностью обеспечивает жизнедеятельность микрорайона: торговые центры, спортивный комплекс с бассейном и танцевальным залом, ледовый дворец, детские студии, сады и школа, медицинский центр, рестораны, кафе и многое другое.</p>
                <h2>Тип используемой опалубки</h2>
                <p>Наша компания поставляет на объект стандартный комплект опалубки для домостроения: крупнощитовую стальную опалубку для бетонирования стен и систему телескопических стоек для заливки перекрытий. Простая система регулировки позволяет быстро установить стойку на необходимую высоту, что существенно сокращает сроки сборки и монтажа.</p>
            </div>

            <div class="offer__buttons">
                <button class="btn">Заказать</button>
                <button class="btn bordered">Получить прайс-лист</button>
            </div>
        </div>
    </div>
</section>

<?= ProductsSection::widget([
    'bgType' => 'to-left',
    'title'=> 'Наша продукция на объекте',
    'text'=> 'ООО «Промстройкомплект» поставила следующую продукцию на объект:'
]); ?>

<?= ManagersSection::widget(['bgType' => 'to-right']); ?>

<?= ObjectsSection::widget([
    'bgType' => 'to-left',
    'title'=> 'Другие объекты',
    'contentAlign' => 'start',
]); ?>

<?= ArticlesSection::widget(['bgType' => 'to-right']) ?>