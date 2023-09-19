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
        // 'images/favicon.ico',
        'css/bootstrap.min.css',
        'css/font-awesome.css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
        'css/fontawesome-stars.css',
        'css/ion-fonts.css',
        'css/plugins/slick.css',
        'css/plugins/animate.css',
        'css/plugins/jquery-ui.min.css',
        'css/plugins/lightgallery.min.css',
        'css/plugins/nice-select.css',
        'css/plugins/timecircles.css',
        'css/style.css',

    ];
    public $js = [
        'assets/js/vendor/jquery-1.12.4.min.js',
        'https://kit.fontawesome.com/a076d05399.js',

        'assets/js/vendor/modernizr-2.8.3.min.js',

        'assets/js/vendor/popper.min.js',

        'assets/js/vendor/bootstrap.min.js',

        'assets/js/plugins/slick.min.js',

        'assets/js/plugins/countdown.js',

        'assets/js/plugins/jquery.barrating.min.js',

        'assets/js/plugins/jquery.counterup.js',

        'assets/js/plugins/jquery.nice-select.js',

        'assets/js/plugins/jquery.sticky-sidebar.js',

        'assets/js/plugins/jquery-ui.min.js',
        'assets/js/plugins/jquery.ui.touch-punch.min.js',

        'assets/js/plugins/lightgallery.min.js',

        'assets/js/plugins/scroll-top.js',

        'assets/js/plugins/theia-sticky-sidebar.min.js',

        'assets/js/plugins/waypoints.min.js',

        'assets/js/plugins/instafeed.min.js',

        'assets/js/plugins/jquery.elevateZoom-3.0.8.min.js',

        'assets/js/plugins/timecircles.js',

        'assets/js/main.js',
        'js/function.js',

    ];
    public $depends = [
      
    ];
}
