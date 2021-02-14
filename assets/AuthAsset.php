<?php


namespace app\assets;


use yii\web\AssetBundle;

class AuthAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'adminlte/bootstrap/css/bootstrap.min.css',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css',
        'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        'adminlte/dist/css/AdminLTE.min.css',
        'adminlte/plugins/iCheck/square/blue.css',
    ];
    public $js = [
        'adminlte/bootstrap/js/bootstrap.min.js',
        'adminlte/plugins/iCheck/icheck.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',

    ];

}