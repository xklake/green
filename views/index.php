<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/27/16
 * Time: 11:54 PM
 */

$banners = Yii::$app->getImageByGroup('banner');
$index = 0;
$comments = \funson86\blog\models\BlogComment::findAll(['status' => \funson86\blog\models\Status::STATUS_ACTIVE]);
?>

<div id="decorative1" style="position:relative">
    <div class="container">
        <div class="divPanel headerArea">
            <div class="row-fluid">
                <div class="span12">

                    <div id="headerSeparator"></div>

                    <div class="row-fluid">
                        <div class="span6">
                            <div id="divHeaderText" class="page-content">
                                <div id="divHeaderLine1"><?=Yii::$app->getTextBlock('home-greeting1')->content?></div><br />
                                <div id="divHeaderLine2"><?=Yii::$app->getTextBlock('home-greeting2')->content?></div><br />
                                <!--div id="divHeaderLine3"><a class="btn btn-danger" href="#"></a></div-->
                            </div>
                        </div>

                        <div class="span6">
                            <!--Edit Camera Slider here-->
                            <div id="camera_wrap">
                                <?php   foreach($banners as $item) { ?>
                                    <div data-src="<?=$item->image?>">
                                        <div class="camera_caption fadeFromBottom cap1">
                                            <?=$item->keywords?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <!--End Camera Slider here-->
                        </div>
                    </div>

                    <div id="headerSeparator2"></div>
                </div>
            </div>

        </div>

    </div>
</div>

<div id="contentOuterSeparator"></div>

<div class="container">

    <div class="divPanel page-content">
        <!--Edit Main Content Area here-->
        <div class="row-fluid">
                <h1>Our Services</h1>
                <hr style="margin:45px 0 35px" />
                <div class="row-fluid">
                    <?php $services = \funson86\blog\models\BlogPost::findAll(['status'=>\funson86\blog\models\Status::STATUS_ACTIVE]);

                    foreach($services as $item) { ?>
                    <div class="span3">
                        <img src="<?='/'. $item->banner?>" class="img-polaroid" style="margin:5px 0px 15px;" alt="">
                        <p style="color:grey;text-align: center;"><?=$item->surname?> <br/></p>
                    </div>
                    <?php } ?>
                </div>

                <hr style="margin:45px 0 35px" />

                <h1>What our patients say?</h1>
                <hr style="margin:45px 0 35px" />
                <!--Edit Blockquote here-->
                <?php foreach($comments as $item) { ?>
                    <blockquote>
                        <h4 class="text-primary"><span style="color:grey"><?=$item->content?></span></h4>
                        <small><?=$item->author?></small>
                    </blockquote>
                <?php } ?>
                <!--/End Blockquote-->
                <p>
                    <?=Yii::$app->getTextBlock('home-ad')?>
                </p>
            </div>
        </div>
        <!--End Main Content Area here-->
        <div id="footerInnerSeparator"></div>
    </div>

</div>
