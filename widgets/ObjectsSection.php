<?php

namespace app\widgets;

use yii\base\Widget;

class ObjectsSection extends Widget
{
    public $bgType = 'to-right';
    public $title = 'Объекты';
    public $text = '';
    public $contentAlign = 'center';
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('objectsSection',[
            'bgType' => $this->bgType,
            'title' => $this->title,
            'text' => $this->text,
            'contentAlign' => $this->contentAlign,
        ]);
    }
}