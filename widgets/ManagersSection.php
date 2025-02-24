<?php

namespace app\widgets;

use yii\base\Widget;

class ManagersSection extends Widget
{
    public $bgType = 'to-right';

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('managersSection', [
            'bgType' => $this->bgType,
        ]);
    }
}