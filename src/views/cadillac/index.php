<?php
/**
 * Created by PhpStorm.
 * User: pomazkinis
 * Date: 30.05.2019
 * Time: 13:16
 *
 * @var $this \yii\web\View
 * @var $data array
 */

use ispomazkin\chevrolet_america\ChevroletAmericaAssetBundle;
use yii\helpers\Html;
use yii\helpers\Url;
use app\components\Helper;

ChevroletAmericaAssetBundle::register($this);

?>
<?=Html::tag('h1',$this->title)?>
<table class="table table-bordered table-responsive">
    <tr>
        <th>Модель</th>
        <th>Год выпуска</th>
    </tr>
    <?php foreach($data as $rows):?>
        <tr>
            <td><?=$rows[0]['model']?></td>
            <td>
                <?=$this->render('years',['years'=>$rows])?>
            </td>
        </tr>
    <?php endforeach;?>
</table>
