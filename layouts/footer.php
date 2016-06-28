<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 5/23/16
 * Time: 3:47 PM
 */
?>

<div id="footerOuterSeparator"></div>

<div id="divFooter" class="footerArea">

    <div class="container">

        <div class="divPanel">

            <div class="row-fluid">
                <div class="span6" id="footerArea1">
                    <h3>Our services</h3>
                    <ul>
                        <li>abcddfd</li>
                        <li>abcddfd</li>
                        <li>abcddfd</li>
                        <li>abcddfd</li>
                        <li>abcddfd</li>
                    </ul>
                </div>

                <div class="span3" id="footerArea3">
                    <h3>Working Time</h3>
                    <p>
                        <?=Yii::$app->setting->get('worktime')?>
                        <br/>
                        <?=Yii::$app->getTextBlock('foot-makeappointment')->content?>
                    </p>
                </div>

                <div class="span3" id="footerArea4">
                    <h3>Contact US</h3>
                    <ul id="contact-info">
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
            </div>

            <div class="row-fluid">
                <div class="span12">
                    <p class="copyright">
                        <a href="<?=Yii::$app->homeUrl?>">
                            <?=Yii::$app->setting->get('copyright')?>
                        </a>,Power by <a href="http://chinasoftware.co.uk" target="_blank" ref="nofollow">China Software UK</a>
                    </p>
                </div>
            </div>
            <br />

        </div>

    </div>

</div>

<?php $this->registerJs('

$("#list_photos").carouFredSel({ responsive: true, width: "100%", scroll: 2, items: {width: 320,visible: {min: 2, max: 6}} });


function startCamera() {$("#camera_wrap").camera({ fx: "scrollLeft", time: 2000, loader: "none", playPause: false, navigation: true, height: "65%", pagination: true });}$(function(){startCamera()});

') ?>


<?php
$google_analysis = Yii::$app->getHtmlBlock('google-analysis');

if($google_analysis != null){
    echo($google_analysis->content);
}
?>

