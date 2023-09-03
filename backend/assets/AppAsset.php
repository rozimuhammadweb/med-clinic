<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "https://fonts.googleapis.com/icon?family=Material+Icons",
        "css/bootstrap.min.css",
        "plugins/fontawesome/css/fontawesome.min.css",
        "plugins/fontawesome/css/all.min.css",
        "css/select2.min.css",
        "plugins/datatables/datatables.min.css",
        "plugins/feather/feather.css",
        "/css/style.css",
    ];
    public $js = [
    //    "/js/jquery-3.6.1.min.js",
        "/js/bootstrap.bundle.min.js",
        "/js/feather.min.js",
        "/js/jquery.slimscroll.js",
        "/js/select2.min.js",
        "/plugins/datatables/jquery.dataTables.min.js",
        "/plugins/datatables/datatables.min.js",
        "/js/jquery.waypoints.js",
        "/js/jquery.counterup.min.js",
        "/plugins/apexchart/apexcharts.min.js",
        "/plugins/apexchart/chart-data.js",
        "/js/app.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
