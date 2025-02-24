<?php

/** @var yii\web\View $this */

use app\widgets\Breadcrumbs;

$this->title = 'Стройтрансметал';
?>

<?= Breadcrumbs::widget(['array_breadcrumb' => ['#' => 'Новости']]) ?>

<div class="articles-page">
    <h1>Новости и статьи</h1>
    <p class="articles-page__text">Мы регулярно публикуем новости и события из жизни компании, производства и нашего участия в проектах.</p>
    <div class="articles-page__wrapper">
        <?php for ($i = 0; $i < 8; $i++): ?>
            <a href="#" class="article-item">
                <div class="article-item__image-overlay">
                    <img src="assets/article-image.png" alt="" class="article-item__image">
                </div>
                <div class="article-item__info">
                    <div class="article-item__meta-wrapper">
                        <div class="article-item__categories">
                            <div class="article-item__category">Новость</div>
                        </div>
                        <div class="article-item__date">01.01.2023</div>
                    </div>
                    <p class="article-item__title">Открытие нового завода</p>
                    <p class="article-item__text">Мы рады сообщить об открытии нового завода по производству
                        металлоконструкций.
                    </p>
                </div>
            </a>
        <?php endfor; ?>
    </div>
</div>