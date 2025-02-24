<?php if (count($array_breadcrumb)) { ?>
    <div class="breadcrumbs-block">
            <a href="/">Главная</a>
            <img src="assets/mini-arrow.svg" alt="" class="breadcrumb__arrow">
            <?php
            $total_count = count($array_breadcrumb);
            $i = 1;
            ?>
            <? foreach ($array_breadcrumb as $k_item_breadcrumb => $v_item_breadcrumb) { ?>
                <? if ($i >= $total_count) { ?>
                    <span><?= $v_item_breadcrumb ?></span>
                <? } else { ?>
                    <a href="<?= $k_item_breadcrumb ?>"><?= $v_item_breadcrumb ?></a>
                    <img src="assets/mini-arrow.svg" alt="" class="breadcrumb__arrow">
                <? } ?>
                <? $i++ ?>
            <? } ?>
    </div>
<? } ?>