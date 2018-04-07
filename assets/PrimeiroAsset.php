<?php
namespace app\assets;
use yii\web\AssetBundle;

class PrimeiroAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/assets.css'  
    ];

    public $js = [
        'js/assets.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'app\assets\OpenSansAsset'
    ];
}