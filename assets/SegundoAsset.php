<?php

namespace app\assets;
use yii\web\AssetBUndle;

class SegundoAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/files';

    public $css = [
        'style1.css',
        'style2.css',
    ];

    public $js = [
        'logica.js'
    ];

    public $depends = [
        'app\assets\PrimeiroAsset'
    ];
}