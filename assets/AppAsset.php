<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        'css/site.css',
    ];
    public $js = [
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        'https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js',
        'https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/Flip.min.js',
        'js/script.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
