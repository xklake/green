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

            <h3>Our Services</h3>
            <hr style="margin:15px 0 15px" />

            <?=$content?>

        </div>
    </div>
</div>

<?php
$this->endContent();
?>

