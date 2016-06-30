<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/28/16
 * Time: 4:34 PM
 */
?>

<div class="container">
    <div class="divPanel page-content">
        <div class="row-fluid">
            <div class="span8">
                <div class="row-fluid">
                    <!--Edit Main Content Area here-->
                    <div class="span12" id="divMain">
                        <h3><?=$catalog->surname?></h3>
                        <hr>
                    </div>

                    <div class="span6" >
                        <ul id="contact-info" style="margin-left:0px;color: rgb(132, 164, 51);">
                            <li>
                                <i class="general foundicon-phone icon"></i>
                                <span class="field">Phone</span>
                                <br />
                                <a href="tel:<?=Yii::$app->setting->get('phone')?>">
                                    <?=Yii::$app->setting->get('phone')?>
                                </a>
                            </li>
                            <li>
                                <i class="general foundicon-mail icon"></i>
                                <span class="field">Email</span>
                                <br />
                                <a href="mailto:<?=Yii::$app->setting->get('email')?>" title="Email">
                                    <?=Yii::$app->setting->get('email')?>
                                </a>
                            </li>
                            <li>
                                <i class="general foundicon-home icon" style="margin-bottom:50px"></i>
                                <span class="field">Address</span>
                                <br />
                                <a href="<?=Yii::$app->setting->get('googlemap')?>">
                                    <?=Yii::$app->setting->get("address")?>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="span6">

                    </div>
                    <!--End Main Content Area-->
                </div>

                <div class="row-fluid">
                    <div class="span12">
                        <iframe src="<?=Yii::$app->setting->get('googlemap')?>" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <?php echo($this->render('/serviceslist'))  ?>
        </div>
        <div id="footerInnerSeparator"></div>
    </div>

</div>

