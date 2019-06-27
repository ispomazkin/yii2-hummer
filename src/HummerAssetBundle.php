<?php
/**
 * Created by PhpStorm.
 * User: pomazkinis
 * Date: 30.05.2019
 * Time: 13:17
 */

namespace ispomazkin\hummer;

use yii\web\AssetBundle;

class HummerAssetBundle extends AssetBundle
{

    public $sourcePath = '@vendor/ispomazkin/yii2-hummer/assets';

    public $css = [
        'css/style.css'
    ];
}