<section class="construction-parts-section">
    <h2 class="construction-parts-section__title">Комплектующие</h2>
    <div class="construction-parts-section__slider">
        <div class="swiper-wrapper wrapper">
            <?php for ($i = 0; $i < 8; $i++): ?>
                <a href="#" class="construction-part swiper-slide">
                    <img src="assets/Placeholder Image.png" class="construction-part__img">
                    <div class="construction-part__details">
                        <p class="construction-part__title">Название</p>
                        <p class="construction-part__price">2 550 ₽</p>
                    </div>
                    <p class="construction-part__description">Описание</p>
                    <button class="btn construction-part__btn">Заказать</button>
                </a>
            <?php endfor; ?>
        </div>
    </div>
</section>