<?php

namespace app\widgets;

use yii\base\Widget;

class PriceRequestSection extends Widget
{
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('priceRequestSection');
    }
}