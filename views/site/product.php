<?php

use app\widgets\ArticlesSection;
use app\widgets\Breadcrumbs;
use app\widgets\ConstructionPartsWidget;
use app\widgets\ContactForm;
use app\widgets\ManagersSection;
use app\widgets\ObjectsSection;
use app\widgets\PartnersSection;
use app\widgets\ProductsSection;
use app\widgets\ReviewsSection;

/** @var yii\web\View $this */
$this->title = 'Стройтрансметал';
?>

<?= Breadcrumbs::widget(['array_breadcrumb' => ['#' => 'Опалубочные системы', '' => 'Опалубка перекрытий']]) ?>

<section class="offer">
    <h1>Опалубка перекрытий</h1>
    <div class="offer__container">
        <div class="offer__slider">
            <div class="swiper-wrapper offer__wrapper">
                <img src="assets/image.png" alt="Image 1" class="swiper-slide offer__slider-image">
                <img src="assets/image.png" alt="Image 2" class="swiper-slide offer__slider-image">
                <img src="assets/image.png" alt="Image 3" class="swiper-slide offer__slider-image">
                <img src="assets/image.png" alt="Image 4" class="swiper-slide offer__slider-image">
                <img src="assets/image.png" alt="Image 5" class="swiper-slide offer__slider-image">
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
                <div class="offer__accordion-item">
                    <div class="offer__accordion-title-container">
                        <h3 class="offer__accordion-title">Документы</h3>
                        <img src="assets/mini-arrow.svg" class="offer__accordion-arrow">
                    </div>
                    <div class="offer__accordion-content">
                        <a href="#">Ссылка на документ.pdf</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="offer-content">
    <h2>Заголовок контент-блока</h2>
    <p>Универсальная система объемных стоек - многофункциональная система опалубки, предназначенная для возведения
        монолитных бетонных и железобетонных конструкций при температуре окружающего воздуха от -45С до +45С, на высоте
        до 20,0 м.</p>
    <p>Стойка объёмная опалубки перекрытий применятся в качестве опалубки перекрытий при строительстве жилых помещений;
        складских, торговых и прочих объектов; пролетных строений мостов (эстакад и др. подобных сооружений), а также
        при отделке туннелей, возводимых открытым и закрытым способом в качестве тоннельной опалубки.</p>
    <p>Кроме того, данная <a href="#">опалубка</a> может быть использована для сооружения концертных сцен, трибун для
        зрителей, крытых павильонов.</p>
    <p>Пример маркированного списка:</p>
    <ul>
        <li>Пункт 1</li>
        <li>Пункт 2</li>
        <li>Пункт 3</li>
    </ul>
    <p>Пример нумерованного списка:</p>
    <ol>
        <li>Пункт 1</li>
        <li>Пункт 2</li>
        <li>Пункт 3</li>
    </ol>
    <h3>Заголовок h3</h3>
    <h4>Заголовок h4</h4>
    <p>Дальше еще немного текста</p>
    <img src="assets/offer-img.png">
</section>

<?= ContactForm::widget() ?>

<?= ConstructionPartsWidget::widget() ?>

<?= ObjectsSection::widget([
    'bgType' => 'to-left',
    'text' => 'Объекты строительства: сельскохозяйственные, жилищные, автодорожные, энергетические, культурные, мосты, торгово-развлекательные центры, метро, в которых мы принимали участие.'
]); ?>

<?= ManagersSection::widget(['bgType' => 'to-right']); ?>

<?= ProductsSection::widget([
    'bgType' => 'to-left',
    'title'=> 'Смотрите также',
]); ?>

<?= PartnersSection::widget() ?>

<?= ReviewsSection::widget(['bgType' => 'to-left']) ?>

<?= ArticlesSection::widget() ?>