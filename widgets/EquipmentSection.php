<?php

namespace app\widgets;

use yii\base\Widget;

class EquipmentSection extends Widget
{
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('equipmentSection');
    }
}