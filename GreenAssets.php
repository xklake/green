<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 5/23/16
 * Time: 3:40 PM
 */

namespace frontend\web\template\green;
use yii\web\AssetBundle;


class GreenAssets extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/assets';

    public $css = [
        'css/bootstrap/bootstrap.min.css',
        'css/bootstrap/bootstrap-responsive.min.css',
        'css/carousel/style.css',
        //'css/fontawesome/font-awesome.min.css',
        'css/camera.css',
        'css/custom.css',
    ];

    public $js = [
        'js/jquery.min.js',
        'js/bootstrap/bootstrap.min.js',
        'js/default.js',
        'js/carousel/jquery.carouFredSel-6.2.0-packed.js',
        'js/camera/camera.min.js',
        'js/easing/jquery.easing.1.3.js',
    ];

    public $depends = [
    ];
}
