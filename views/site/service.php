<?php

use app\widgets\ArticlesSection;
use app\widgets\Breadcrumbs;
use app\widgets\ContactForm;
use app\widgets\EquipmentSection;
use app\widgets\ManagersSection;
use app\widgets\ReviewsSection;
use app\widgets\ServicesSection;

/** @var yii\web\View $this */
$this->title = 'Стройтрансметал';
?>

<?= Breadcrumbs::widget(['array_breadcrumb' => ['#' => 'Услуги', '' => 'Горячее цинкование']]) ?>

<section class="offer">
    <h1>Горячее цинкование</h1>
    <div class="offer__container">
        <div class="offer__slider">
            <div class="swiper-wrapper offer__wrapper">
                <img src="assets/service-img.png" alt="Image 1" class="swiper-slide offer__slider-image">
                <img src="assets/service-img.png" alt="Image 2" class="swiper-slide offer__slider-image">
                <img src="assets/service-img.png" alt="Image 3" class="swiper-slide offer__slider-image">
                <img src="assets/service-img.png" alt="Image 4" class="swiper-slide offer__slider-image">
                <img src="assets/service-img.png" alt="Image 5" class="swiper-slide offer__slider-image">
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="offer__info">
            <p class="offer__price">от 55 000.54 ₽</p>
            <div class="offer__description">
                <p>Универсальная система объемных стоек ХСИ-GW</p>
                <p>Универсальная система объемных стоек – многофункциональная система опалубки, предназначенная для
                    возведения монолитных бетонных и железобетонных конструкций при температуре окружающего воздуха
                    от -45С
                    до +45С, на высоте до 20,0 м.Стойка объёмная опалубки перекрытий применятся в качестве опалубки
                    перекрытий при строительстве жилых помещений; складских, торговых и прочих объектов; пролетных
                    строений
                    мостов (эстакад и др. подобных сооружений), а также при отделке туннелей, возводимых открытым и
                    закрытым
                    способом в качестве тоннельной опалубки.</p>
            </div>

            <div class="offer__buttons">
                <button class="btn">Заказать</button>
                <button class="btn bordered">Получить прайс-лист</button>
            </div>

            <div class="offer__accordion">
                <div class="offer__accordion-item">
                    <div class="offer__accordion-title-container">
                        <h3 class="offer__accordion-title">Доставка</h3>
                        <img src="assets/mini-arrow.svg" class="offer__accordion-arrow">
                    </div>
                    <div class="offer__accordion-content">
                        <p>Информация о доставке...</p>
                    </div>
                </div>
                <div class="offer__accordion-item">
                    <div class="offer__accordion-title-container">
                        <h3 class="offer__accordion-title">Оплата</h3>
                        <img src="assets/mini-arrow.svg" class="offer__accordion-arrow">
                    </div>
                    <div class="offer__accordion-content">
                        <p>Информация об оплате...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="offer-content">
    <h2>Габариты металлоконструкций для цинкования</h2>
    <p>Имеющееся оборудование и технология итальянской фирмы BISOL позволяет цинковать металлоконструкции с габаритами: 12,5х1,5х3,0 и 9,0х1,8х3,2 метра, а толщина покрытия может составлять от 40 до 200 микрон.</p>
    <h3>Преимущества горячеоцинкованного покрытия</h3>
    <ul>
        <li>Удешевление себестоимости продукции за счет отсутствия издержек на повторное окрашивание изделий</li>
        <li>Гарантированный срок эксплуатации изделий с горячеоцинкованным покрытием — не менее 25 лет</li>
        <li>Сохранение презентабельного внешнего вида изделий даже в самых сложных климатических условиях</li>
    </ul>
</section>

<?= ContactForm::widget() ?>

<?= ManagersSection::widget(['bgType' => 'to-left']); ?>

<?= EquipmentSection::widget(); ?>

<?= ServicesSection::widget(['title' => 'Другие услуги', 'bgType' => 'to-left']) ?>

<?= ReviewsSection::widget() ?>

<?= ArticlesSection::widget(['bgType' => 'to-left']) ?>