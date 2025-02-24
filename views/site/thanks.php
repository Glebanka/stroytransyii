<?php
use app\widgets\Breadcrumbs;

/** @var yii\web\View $this */


$this->title = 'Спасибо';
?>

<?= Breadcrumbs::widget(['array_breadcrumb' => ['#' => 'Спасибо']]) ?>

<div class="thank-you-page">
    <h1>Спасибо за заявку</h1>
    <div class="thank-you-page__container">
        <p>Мы получили ваше обращение и свяжемся, по указанным контактам, в ближайшее время.</p>
    </div>
</div>