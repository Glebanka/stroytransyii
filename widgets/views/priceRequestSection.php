<?php use app\widgets\GreenBgWrapper;
GreenBgWrapper::begin([
  'type' => 'to-left',
]) ?>
<section class="price-request">
  <img src="assets/pdf-image.png" alt="pdf image format" class="price-request__icon">
  <div class="price-request__container">
    <h2 class="price-request__title">Заказать прайс-лист</h2>
    <p class="price-request__text">Отправим вам актуальный прайс-лист нашей продукции.<br>
      В течение 48 часов закрепим за вами скидку до 10% на весь заказ.</p>
    <form class="price-request__form">
      <div class="price-request__form-group">
        <input type="email" class="price-request__input" placeholder="Введите ваш email" required>
        <button type="submit" class="price-request__btn btn">получить прайс-лист</button>
      </div>
      <p class="price-request__privacy-policy">Отправляя, вы соглашаетесь с <a href="#">политикой конфиденциальности
          и обработки данных</a></p>
    </form>
  </div>
</section>
<?php GreenBgWrapper::end(); ?>