<?php

namespace app\widgets;

use yii\base\Widget;

class Breadcrumbs extends Widget
{
    public $array_breadcrumb = [];

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('breadcrumbs', [
            'array_breadcrumb' => $this->array_breadcrumb,
        ]);
    }
}