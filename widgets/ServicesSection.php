<?php

namespace app\widgets;

use yii\base\Widget;

class ServicesSection extends Widget
{
    public $title = 'Услуги';
    public $bgType = 'to-right';
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('servicesSection', ['title' => $this->title, 'bgType' => $this->bgType]);
    }
}
