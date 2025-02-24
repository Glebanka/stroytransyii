<?php

namespace app\widgets;

use yii\base\Widget;

class AdvantagesSection extends Widget
{
    public $bgType = 'to-right';

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('advantagesSection', [
            'bgType' => $this->bgType,
        ]);
    }
}