<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       // 'css/site.css',
        'css/bootstrap.css',
        'css/font-awesome.css',
        'css/lightbox.css',
        'css/style.css',
    ];
    public $js = [
        'js/bootstrap.js',
        'js/easing.js',
        'js/jquery-1.11.1.min.js',
        'js/lightbox-plus-jquery.min.js',
        'js/move-top.js',
        'js/responsiveslides.min.js',
        'js/smoothScroll.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    'yii\bootstrap\BootstrapAsset',
    ];
}
