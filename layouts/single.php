<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/10/16
 * Time: 11:42 AM
 */

$this->beginContent('@frontend/web/template/green/layouts/main.php');
?>

<div class="container">
    <div class="divPanel page-content">
        <!--Edit Main Content Area here-->
        <div class="row-fluid">
            <div class="span8" style="color:grey;">
                <?=$content?>
            </div>
            <?php echo($this->render('/serviceslist'))  ?>
        </div>
    </div>
</div>

<?php
$this->endContent();
?>

