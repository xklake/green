<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/28/16
 * Time: 7:10 PM
 */
?>

<h3><?=$catalog->surname?></h3>

<hr style="margin:15px 0 15px" />

<?php
if($catalog != null) {
    echo($catalog->content);
}
?>
