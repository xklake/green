<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/28/16
 * Time: 4:06 PM
 */
?>

<h3>Our Services</h3>

<hr/>

<div class="row-fluid">
    <?php
    $posts = array_reverse($posts);
    foreach($posts as $item){ ?>
        <div class="span3">
            <a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/view', 'id'=> $item->id])?>" target="_self">
                <img src="<?='/'. $item->banner?>" class="img-polaroid" style="margin:5px 0px 15px;" alt="">
            </a>
            <p style="text-align:center;">
                <a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/view', 'id'=> $item->id])?>" target="_self">
                    <span style="font-size: 1.2rem;">
                        <strong><?=$item->surname?></strong>
                    </span>
                    <br/>
                </a>
                <?=$item->brief?>
                <br/>
            </p>
        </div>
    <?php } ?>
</div>


