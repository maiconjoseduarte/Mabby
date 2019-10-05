<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/main';
    public $css = [
        'css/bootstrap.min.css',
        'css/atlantis.min.css',
        'css/demo.css',
    ];

    public $js = [
        'js/core/jquery.3.2.1.min.js',
        'js/core/popper.min.js',
        'js/core/bootstrap.min.js',
        'js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js',
        'js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js',
        'js/plugin/jquery-scrollbar/jquery.scrollbar.min.js',
        'js/plugin/chart.js/chart.min.js',
        'js/plugin/jquery.sparkline/jquery.sparkline.min.js',
        'js/plugin/chart-circle/circles.min.js',
        'js/plugin/datatables/datatables.min.js',
        'js/plugin/bootstrap-notify/bootstrap-notify.min.js',
        'js/plugin/jqvmap/jquery.vmap.min.js',
        'js/plugin/jqvmap/maps/jquery.vmap.world.js',
        'js/plugin/sweetalert/sweetalert.min.js',
        'js/atlantis.min.js',
        'js/setting-demo.js',
        'js/demo.js',
        'js/graficos.js',
    ];

    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];

}
