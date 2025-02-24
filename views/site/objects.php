<?php

use app\widgets\ArticlesSection;
use app\widgets\Breadcrumbs;

/** @var yii\web\View $this */
$this->title = 'Стройтрансметал';

/**
 * Массив объектов проектов, каждый из которых содержит информацию о конкретном проекте.
 * 
 * Каждый объект проекта содержит следующие свойства:
 * - title: Название проекта.
 * - text: Описание проекта.
 * - img: Путь к изображению, связанному с проектом.
 * - product: Тип продукта, используемого в проекте.
 * - sector: Сектор, к которому относится проект.
 * - region: Регион, в котором находится проект.
 */

$projects = [
    (object)[
        "title" => "Пешеходный мост",
        "text" => "Металлоконструкция для строительства пешеходных мостов через Варшавское шоссе.",
        "img" => "assets/object-image.png",
        "product" => "Металлоконструкции",
        "sector" => "",
        "region" => "Московская область"
    ],
    (object)[
        "title" => "Жилой комплекс «Гусарская баллада»",
        "text" => "Комплекс состоит из 67 таунхаусов, 21 жилого дома с высотностью от 12-ти до 17-ти этажей.",
        "img" => "assets/object-image.png",
        "product" => "Опалубочные системы",
        "sector" => "Жилищное строительство",
        "region" => "Московская область"
    ],
    (object)[
        "title" => "Жилой дом г. Ивантеевка",
        "text" => "Для заливки стен было предложено использовать крупнощитовую стальную опалубку, скорость монтажа сократили в 1,5 раза.",
        "img" => "assets/object-image.png",
        "product" => "Опалубочные системы",
        "sector" => "",
        "region" => "Московская область"
    ],
    (object)[
        "title" => "Пешеходный мост",
        "text" => "Уникальность комплекса начинается уже с архитектуры его строения.",
        "img" => "assets/object-image.png",
        "product" => "Металлоконструкции",
        "sector" => "Культурные сооружения",
        "region" => "Ярославль"
    ],
    (object)[
        "title" => "Мариинский театр",
        "text" => "При строительстве подвальной части Мариинского театра использовалась контрфорсная система совместно с мелкощитовой опалубкой.",
        "img" => "assets/object-image.png",
        "product" => "Опалубочные системы",
        "sector" => "",
        "region" => "Санкт-Петербург"
    ],
    (object)[
        "title" => "Светопрозрачные конструкции купола церкви",
        "text" => "Еще одним интересным проектом стало возведение системы куполов у церкви в Белгородской области.",
        "img" => "assets/object-image.png",
        "product" => "Металлоконструкции",
        "sector" => "Культурные сооружения",
        "region" => "Белгородская область"
    ]
];
/*
* Из массива проектов генерируются следующие массивы:
* 
* $products: Массив уникальных типов продуктов, используемых в проектах.
* $regions: Массив уникальных регионов, в которых находятся проекты.
* $sectors: Массив уникальных секторов, к которым относятся проекты.
* 
* Массивы генерируются с использованием array_map для извлечения соответствующего свойства из каждого проекта,
* array_filter для удаления пустых значений и array_unique для обеспечения уникальности.
*/
$products = array_unique(array_filter(array_map(function ($project) {
    return $project->product;
}, $projects)));

$regions = array_unique(array_filter(array_map(function ($project) {
    return $project->region;
}, $projects)));

$sectors = array_unique(array_filter(array_map(function ($project) {
    return $project->sector;
}, $projects)));

?>

<?= Breadcrumbs::widget(['array_breadcrumb' => ['#' => 'Объекты']]) ?>

<div class="objects-page">
    <h1>Объекты</h1>
    <div class="objects-page__filters">
        <label for="objects-filter-product" class="objects-page__filter-container">
            <select class="objects-page__filter" id="objects-filter-product" autocomplete="off">
                <option selected value="Все">Вся продукция</option>
                <?php foreach ($products as $product) : ?>
                    <option value="<?= $product ?>"><?= $product ?></option>
                <?php endforeach; ?>
            </select>
        </label>
        <label for="objects-filter-region" class="objects-page__filter-container">
            <select class="objects-page__filter" id="objects-filter-region" autocomplete="off">
                <option selected value="Все">Всe отрасли</option>
                <?php foreach ($regions as $region) : ?>
                    <option value="<?= $region ?>"><?= $region ?></option>
                <?php endforeach; ?>
            </select>
        </label>
        <label for="objects-filter-sector" class="objects-page__filter-container">
            <select class="objects-page__filter" id="objects-filter-sector" autocomplete="off">
                <option selected value="Все">Всe регионы</option>
                <?php foreach ($sectors as $sector) : ?>
                    <option value="<?= $sector ?>"><?= $sector ?></option>
                <?php endforeach; ?>
            </select>
        </label>
    </div>
    <div class="objects-page__wrapper">
        <?php foreach ($projects as $project) : ?>
            <a href="#" class="object visible">
                <div class="object__image-overlay">
                    <img src="assets/object-image.png" alt="" class="object__image">
                </div>
                <div class="object__info">
                    <div class="object__categories">
                        <?php if ($project->product != '') : ?>
                            <div data-product="<?= $project->product ?>" class="object__category"><?= $project->product ?></div>
                        <?php endif; ?>
                        <?php if ($project->region != '') : ?>
                            <div data-region="<?= $project->region ?>" class="object__category"><?= $project->region ?></div>
                        <?php endif; ?>
                        <?php if ($project->sector != '') : ?>
                            <div data-sector="<?= $project->sector ?>" class="object__category"><?= $project->sector ?></div>
                        <?php endif; ?>
                    </div>
                    <p class="object__title"><?= $project->title ?></p>
                    <p class="object__text"><?= $project->text ?></p>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>
<script>
    const projects = <?= json_encode($projects, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK); ?>;

    const objectElems = document.querySelectorAll('.object');

    const projectFilters = document.querySelectorAll('.objects-page__filter');

    const changeHadler = ((event) => {
        event.target.classList.add('active');
        projectFilters.forEach(projectFilter => {
            if (projectFilter !== event.target) {
                projectFilter.classList.remove('active');
                projectFilter.value = 'Все';
            }
        });
        const filter = event.target.id.split('-')[2];
        objectElems.forEach(objectElem => {
            if (event.target.value === 'Все') {
                objectElem.classList.add('visible');
            } else {
                objectElem.classList.remove('visible');
                if (objectElem.querySelector(`[data-${filter}="${event.target.value}"]`)) {
                    objectElem.classList.add('visible');
                }
            }
        });
    })

    projectFilters.forEach(projectFilter => {
        projectFilter.addEventListener('change', changeHadler)
    })
</script>

<?= ArticlesSection::widget(['bgType' => 'to-left']) ?>