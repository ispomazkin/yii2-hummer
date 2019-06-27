<?php
/**
 * Created by PhpStorm.
 * User: pomazkinis
 * Date: 31.05.2019
 * Time: 9:01
 *
 * @var $this \yii\web\View
 * @var $data array
 * @var $img_path string
 * @var $search_pattern string
 */

use yii\helpers\Html;
use yii\helpers\Url;
use app\components\Helper;
use ispomazkin\hummer\HummerAssetBundle;

HummerAssetBundle::register($this);

$img_src = $img_path . '/' .  $data['img'];
?>

<?=Html::tag('h1',$data['model'].' '.$data['year'])?>
<?=Html::tag('h2',$data['category'])?>
<?=Html::tag('h2',$this->title)?>


<div class="wrapper">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
            <img src="<?=$img_src?>" class="thumbnail col-sm-12 col-md-8 col-lg-6 col-xs-12" alt="">

        </div>
    </div>
    <h2>Список запчастей</h2>
    <table class="table table-responsive table-bordered">
        <tr>
            <th><span class="mobile_hidden">Позиция</span><span class="mobile_visible">Поз.</span></th>
            <th><span class="mobile_hidden">Артикул</span><span class="mobile_visible">Арт.</span></th>
            <th>Описание</th>
            <th class="mobile_hidden">Применение</th>
            <th class="mobile_hidden">Период</th>
            <th><span class="mobile_hidden">Количество</span><span class="mobile_visible">Кол-во</span></th>
        </tr>
        <?php foreach($data['parts'] as $part):?>
            <tr>
                <td><?=$part['pic']?></td>
                <td><?=$this->render('_article',['article'=>$part['article'],'search_pattern'=>$search_pattern])?></td>
                <td><?=($part['description'] . ($part['side'] ? ', '.$part['side']:''))?></td>
                <td class="mobile_hidden primen"><?=$part['primen']?></td>
                <td class="mobile_hidden"><?=$part['year']?></td>
                <td><?=$part['qty']?></td>
            </tr>
        <?php endforeach?>
    </table>
</div>


