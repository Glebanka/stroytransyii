<?php

use app\widgets\ArticlesSection;
use app\widgets\Breadcrumbs;

/** @var yii\web\View $this */
$this->title = 'Стройтрансметал';
?>

<?= Breadcrumbs::widget(['array_breadcrumb' => ['articles' => 'Новости', '' => 'Начались работы по монтажу первого перегона моста в г. Жуковском»']]) ?>

<article class="article">
    <h1>Начались работы по монтажу первого перегона моста в г. Жуковском</h1>
    <div class="article__container">
        <div class="article__slider">
            <div class="swiper-wrapper article__wrapper">
                <img src="assets/object-image2.png" alt="Image 1" class="swiper-slide article__slider-image">
                <img src="assets/object-image2.png" alt="Image 4" class="swiper-slide article__slider-image">
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="article-content">
            <h2>Заголовок h2</h2>
            <p><strong>Универсальная</strong> система объемных стоек - многофункциональная система опалубки, предназначенная для возведения
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
        </div>
    </div>
</article>
<?= ArticlesSection::widget([
    'bgType' => 'to-left',
    'title' => 'Другие новости',
]) ?>