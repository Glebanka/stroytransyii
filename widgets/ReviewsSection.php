<?php

namespace app\widgets;

use yii\base\Widget;

class ReviewsSection extends Widget
{
    public $bgType = 'to-right';
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('reviewsSection',['bgType' => $this->bgType]);
    }
}