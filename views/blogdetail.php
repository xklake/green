<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 5/23/16
 * Time: 5:02 PM
 */

?>

<div class="row-fluid">
    <!--Edit Main Content Area here-->
    <div class="span8" id="divMain">
        <h3><?=$post->surname?></h3>
        <hr/>
        <p>
            <?=$post->content?>
        </p>
    </div>
    <?php echo($this->render('/serviceslist'))  ?>
    <!--End Main Content Area-->
</div>
