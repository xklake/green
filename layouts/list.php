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
            <div class="span12">

                <?=$content?>

                <hr style="margin:45px 0 35px" />
            </div>

        </div>
    </div>
</div>

<?php
$this->endContent();
?>

