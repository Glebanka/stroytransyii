<section class="green-bg">
    <?php if ($type == 'to-right'): ?>
        <picture class="bg-top">
            <source srcset="assets/backgrounds/bg-top-to-right-mob.svg" media="only screen and (orientation: portrait)">
            <img class="bg-top" src="assets/backgrounds/bg-top-to-right.svg" alt="Background">
        </picture>
        <?= $content ?>
        <picture class="bg-bottom">
            <source srcset="assets/backgrounds/bg-bottom-to-left-mob.svg" media="only screen and (orientation: portrait)">
            <img class="bg-bottom" src="assets/backgrounds/bg-bottom-to-left.svg" alt="Background">
        </picture>
    <?php else: ?>
        <picture class="bg-top">
            <source srcset="assets/backgrounds/bg-top-to-left-mob.svg" media="only screen and (orientation: portrait)">
            <img class="bg-top" src="assets/backgrounds/bg-top-to-left.svg" alt="Background">
        </picture>
        <?= $content ?>
        <picture class="bg-bottom">
            <source srcset="assets/backgrounds/bg-bottom-to-right-mob.svg" media="only screen and (orientation: portrait)">
            <img class="bg-bottom" src="assets/backgrounds/bg-bottom-to-right.svg" alt="Background">
        </picture>
    <?php endif; ?>
</section>