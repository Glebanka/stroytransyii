<section class="green-bg without-margin">
    <?php if ($bgType == 'to-right'): ?>
        <picture class="bg-top">
            <source srcset="assets/backgrounds/bg-top-to-right-mob.svg" media="only screen and (orientation: portrait)">
            <img class="bg-top" src="assets/backgrounds/bg-top-to-right.svg" alt="Background">
        </picture>
    <?php else: ?>
        <picture class="bg-top">
            <source srcset="assets/backgrounds/bg-top-to-left-mob.svg" media="only screen and (orientation: portrait)">
            <img class="bg-top" src="assets/backgrounds/bg-top-to-left.svg" alt="Background">
        </picture>
    <?php endif; ?>
    <section class="articles-section">
        <div class="articles-section__text-container">
            <h2 class="articles-section__title"><?=$title?></h2>
            <p class="articles-section__text">Мы регулярно публикуем новости и события <br>
                из жизни компании, производства и нашего участия в проектах</p>
        </div>
        <div class="articles-section__wrapper">
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
                    <p class="article-item__title">Современные методы строительства</p>
                    <p class="article-item__text">В статье рассматриваются современные методы строительства с
                        использованием
                        наших опалубочных систем.</p>
                </div>
            </a>
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
                    <p class="article-item__title">Новый проект в Москве</p>
                    <p class="article-item__text">Мы начали новый проект по строительству жилого комплекса в Москве.</p>
                </div>
            </a>
        </div>
        <a href="#" class="btn">Посмотреть все новости</a>
    </section>

    <div class="bg-bottom with-bg-green"></div>
</section>