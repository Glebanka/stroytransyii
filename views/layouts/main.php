<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\ContactForm;
use yii\bootstrap5\Html;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <header class="header">
        <div class="header__top">
            <div class="header__top-address-wrapper">
                <div class="header__top-address">
                    <p class="header__top-address-title">Производство:</p>
                    <p class="header__top-address-text">
                        г. Малоярославец, ул. Мирная, д. 1
                    </p>
                </div>
                <div class="header__top-address">
                    <p class="header__top-address-title">Офис:</p>
                    <p class="header__top-address-text">
                        г. Москва, Яковоапостольский пер., д. 7
                    </p>
                </div>
            </div>
            <div class="header__top-contacts-wrapper">
                <a href="#" class="header__top-contact">mail@opalubka-lesa.ru</a>
                <a href="#" class="header__top-contact">+7 (915) 890-40-27</a>
                <button class="header-btn">Заказать звонок</button>
            </div>
        </div>
        <div class="header__bottom">
            <a href="/" class="header__logo-container">
                <img src="Logo.svg" alt="Стройтрансметал" class="header__logo" />
            </a>
            <nav class="header__bottom-nav">
                <a href="#" class="header__bottom-nav-link">
                    <p class="header__bottom-nav-link-text">опалубка</p>
                </a>
                <a href="#" class="header__bottom-nav-link">
                    <p class="header__bottom-nav-link-text">Мостовые конструкции</p>
                </a>
                <a href="#" class="header__bottom-nav-link">
                    <p class="header__bottom-nav-link-text">Металлоконструкции</p>
                </a>
                <a href="#" class="header__bottom-nav-link">
                    <p class="header__bottom-nav-link-text">Услуги</p>
                </a>
                <a href="#" class="header__bottom-nav-link">
                    <p class="header__bottom-nav-link-text">Объекты</p>
                </a>
                <a href="#" class="header__bottom-nav-link">
                    <p class="header__bottom-nav-link-text">О компании</p>
                </a>
                <a href="#" class="header__bottom-nav-link">
                    <p class="header__bottom-nav-link-text">Контакты</p>
                </a>
                <button class="header-btn">Заказать расчет</button>
            </nav>
            <a href="#" class="header__bottom-link only-mobile">+7 (915) 890-40-27</a>
            <svg class="header__burger" xmlns="http://www.w3.org/2000/svg" width="32" height="14" viewBox="0 0 32 14"
                fill="none">
                <rect width="32" height="2" fill="#010101" />
                <rect y="6" width="32" height="2" fill="#010101" />
                <rect y="12" width="32" height="2" fill="#010101" />
            </svg>
        </div>
    </header>

    <?= $content ?>

    <footer class="footer">
        <?= ContactForm::widget() ?>

        <div class="footer__container">
            <div class="footer__info">
                <div class="footer__logo">
                    <img src="Logo.svg" alt="СтройТрансМеталл">
                </div>
                <div class="footer__addresses">
                    <div class="footer__address">
                        <p class="footer__address-title">Адрес офиса:</p>
                        <p class="footer__address-text">г. Москва,<br> пер. Яковоапостольский, д. 7, оф. 108</p>
                    </div>
                    <div class="footer__address">
                        <p class="footer__address-title">Адрес производства:</p>
                        <p class="footer__address-text">Калужская обл., г. Малоярославец,<br> ул. Мирная, д. 1</p>
                    </div>
                </div>
                <div class="footer__contacts">
                    <p class="footer__contacts-title">Для связи:</p>
                    <div class="footer__contacts-wrapper">
                        <p class="footer__phone">+7 (915) 890-40-27</p>
                        <p class="footer__email">sale@opalubka-lesa.ru</p>
                    </div>
                </div>
            </div>

            <div class="footer__menu">
                <div class="footer__column">
                    <a href="#" class="footer__column-title">Опалубочные системы</a>
                    <div class="footer__list">
                        <a href="#" class="footer__item">Опалубка перекрытий</a>
                        <a href="#" class="footer__item">Опалубка колонн</a>
                        <a href="#" class="footer__item">Опалубка стен</a>
                        <a href="#" class="footer__item">Мелкощитовая опалубка</a>
                        <a href="#" class="footer__item">Балочно-ригельная опалубка</a>
                        <a href="#" class="footer__item">Контрфорсная опалубка</a>
                    </div>
                </div>

                <div class="footer__column">
                    <a href="#" class="footer__column-title">Мостовые конструкции</a>
                    <div class="footer__list">
                        <a href="#" class="footer__item">Специальные вспомогательные сооружения и устройства</a>
                        <a href="#" class="footer__item">Формообразователи пролетных строений</a>
                        <a href="#" class="footer__item">Архитектурные формообразователи колонн</a>
                        <a href="#" class="footer__item">Консольная опалубка</a>
                        <a href="#" class="footer__item">Мостовые опорные подмости</a>
                        <a href="#" class="footer__item">Консольно-переставные подмости</a>
                    </div>
                </div>

                <div class="footer__column">
                    <a href="#" class="footer__column-title">Металлоконструкции</a>
                    <div class="footer__list">
                        <a href="#" class="footer__item">Металлоконструкции для шумозащитных экранов и заборов</a>
                        <a href="#" class="footer__item">Дорожные ограждения и металлические отбойники</a>
                        <a href="#" class="footer__item">Металлоконструкции для дымоходов</a>
                        <a href="#" class="footer__item">Металлоконструкции для нужд нефтегазового комплекса</a>
                        <a href="#" class="footer__item">Металлоконструкции для энергетического комплекса</a>
                        <a href="#" class="footer__item">Металлоконструкции общего назначения</a>
                        <a href="#" class="footer__item">Светопрозрачные металлоконструкции</a>
                        <a href="#" class="footer__item">Мачты сотовой связи</a>
                        <a href="#" class="footer__item">Сваи металлические для промышленного строительства</a>
                        <a href="#" class="footer__item">Мойки самообслуживания</a>
                    </div>
                </div>

                <a href="#" class="footer__column-title">Комплектующие</a>

                <div class="footer__column">
                    <a href="#" class="footer__column-title">Услуги</a>
                    <div class="footer__list">
                        <a href="#" class="footer__item">Горячее цинкование</a>
                        <a href="#" class="footer__item">Обучение</a>
                        <a href="#" class="footer__item">Плазменная резка</a>
                    </div>
                </div>
                <a href="#" class="footer__column-title">Объекты</a>

                <div class="footer__column">
                    <a href="#" class="footer__column-title">О компании</a>
                    <div class="footer__list">
                        <a href="#" class="footer__item">Вакансии</a>
                        <a href="#" class="footer__item">Новости</a>
                        <a href="#" class="footer__item">Отзывы</a>
                        <a href="#" class="footer__item">Оборудование</a>
                        <a href="#" class="footer__item">Контакты</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer__bottom">
            <div class="footer__bottom-container">
                <div class="footer__info-block">
                    <p class="footer__copyright">© 2025, ООО СтройТрансМеталл</p>
                    <a href="#" class="footer__link">Политика конфиденциальности</a>
                    <a href="https://userweb.ru" class="footer__developer footer__link">Разработано в компании
                        Userweb</a>
                </div>
                <div class="footer__socials">
                    <a href="#" class="footer__social-link"><img src="assets/Vkontakte (VK).svg" alt="VK"></a>
                    <a href="#" class="footer__social-link"><img src="assets/Vkontakte (VK).svg" alt="Telegram"></a>
                    <a href="#" class="footer__social-link"><img src="assets/Vkontakte (VK).svg" alt="WhatsApp"></a>
                </div>
            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>