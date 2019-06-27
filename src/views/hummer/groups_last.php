<?php
/**
 * Created by PhpStorm.
 * User: pomazkinis
 * Date: 31.05.2019
 * Time: 7:31
 *
 *
 * @var $this \yii\web\View
 * @var $data array
 * @var $img_path string
 */

use yii\helpers\Html;
use yii\helpers\Url;
use app\components\Helper;
use ispomazkin\hummer\HummerAssetBundle;

HummerAssetBundle::register($this);
?>

<?=Html::tag('h1',$data['model'].' '.$data['year'])?>
<?=Html::tag('h2',$this->title)?>


<div class="container">
    <?php foreach($data['groups'] as $item):?>
        <div class="col-sm-6 col-md-4 col-lg-3 chevrolet_item">
            <a class="thumbnail" href="<?=Url::to(['hummer/parts','year_url'=>$data['model_url'],'last_url'=>$item['url']])?>">
                <img src="<?=$img_path .'/'. $item['preview']?>" height="350px" class="rounded thumbnail mx-auto d-block" title="<?=$item['description']?>" alt="<?=$data['category']?>">
                <p title="<?=$item['description']?>"><?=$item['description']?></p>
            </a>
        </div>
    <?php endforeach;?>
</div>
