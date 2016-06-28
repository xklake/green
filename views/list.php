<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/28/16
 * Time: 4:06 PM
 */
?>

<div class="row-fluid">
    <?php foreach($posts as $item){ ?>
        <div class="span4">
            <h4>
                <a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/view', 'id'=> $item->id])?>" target="_self">
                    <?=$item->surname?>
                </a>
            </h4>
            <a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/view', 'id'=> $item->id])?>" target="_self">
                <img src="<?='/'. $item->banner?>" class="img-polaroid" style="margin:5px 0px 15px;" alt="">
            </a>

            <p><?=$item->brief?> <br/></p>
            <p><a class="btn btn-primary" style="margin:5px 0px 15px;">Learn more</a></p>
        </div>
    <?php } ?>
</div>


