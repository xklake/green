<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/28/16
 * Time: 10:05 PM
 */

$products = \funson86\blog\models\BlogPost::findAll(['status'=>\funson86\blog\models\Status::STATUS_ACTIVE]);
?>


<div class="span4 hidden-phone" style="color:grey;">
    <h3>Our Services</h3>

    <?php foreach($products as $item){ ?>
        <div class="row-fluid">
            <a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/view', 'id'=> $item->id])?>" target="_self">
                <img src="<?='/'. $item->banner?>" class="img-polaroid" style="margin:5px 0px 15px;" alt="">
            </a>

            <p style="text-align: center;">
                <span style="font-size:1.2rem">
                    <strong> <?=$item->surname?></strong>
                </span>
            </p>
            <hr/>
        </div>
    <?php } ?>
</div>


