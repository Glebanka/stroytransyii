<?php

namespace app\widgets;

use yii\base\Widget;

class GreenBgWrapper extends Widget
{
    public $type = 'to-right';
    
    public function init()
    {
        parent::init();
        ob_start();
    }

    public function run()
    {
        $content = ob_get_clean();
        return $this->render('greenBgWrapper', [
            'type' => $this->type,
            'content' => $content,
        ]);
    }
}