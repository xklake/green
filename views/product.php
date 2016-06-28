<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/28/16
 * Time: 3:39 PM
 */
?>

<div class="row-fluid">
    <?php foreach($products as $item){ ?>
        <div class="span4">
            <h4>
                <a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/product', 'id'=> $item->id])?>" target="_self">
                    <?=$item->name?>
                </a>
            </h4>
            <a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/product', 'id'=> $item->id])?>" target="_self">
                <img src="<?='/'. $item->image?>" class="img-polaroid" style="margin:5px 0px 15px;" alt="">
            </a>

            <p><?=$item->brief?> <br/></p>
            <p><a class="btn btn-primary" style="margin:5px 0px 15px;">Learn more</a></p>
        </div>
    <?php } ?>
</div>



