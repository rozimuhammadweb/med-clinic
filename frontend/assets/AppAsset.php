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
        'css/site.css',
        'vendor/bootstrap-select/css/bootstrap-select.min.css',
        'vendor/swiper/swiper.min.css',
        'css/style.css',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap',
    ];
    public $js = [
        'js/jquery.min.js',
        'js/contact.js',
        'js/functions.js',
        'vendor/magnific-popup/jquery.magnific-popup.js',
        'vendor/bootstrap-select/js/bootstrap-select.min.js',
        'vendor/bootstrap/js/bootstrap.bundle.min.js',
        'js/jquery.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
