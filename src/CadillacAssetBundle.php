<?php
/**
 * Created by PhpStorm.
 * User: pomazkinis
 * Date: 30.05.2019
 * Time: 13:17
 */

namespace ispomazkin\cadillac;

use yii\web\AssetBundle;

class CadillacAssetBundle extends AssetBundle
{

    public $sourcePath = '@vendor/ispomazkin/yii2-cadillac/assets';

    public $css = [
        'css/style.css'
    ];
}