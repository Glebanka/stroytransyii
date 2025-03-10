<?php

namespace app\widgets;

use yii\base\Widget;

class ArticlesSection extends Widget
{
    public $title = 'Новости и статьи';
    public $bgType = 'to-right';

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('articlesSection', [
            'bgType' => $this->bgType,
            'title' => $this->title,
        ]);
    }
}