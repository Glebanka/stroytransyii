<?php

namespace app\widgets;

use yii\base\Widget;

class ProductsSection extends Widget
{
    public $bgType = 'to-right';
    public $title = '';
    public $text = '';
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('productsSection',[
            'bgType' => $this->bgType,
            'title' => $this->title,
            'text' => $this->text,
        ]);
    }
}