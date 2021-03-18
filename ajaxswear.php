<?php
if(isset($_REQUEST['swear'])){
    include_once __DIR__."/deleteswear.php";
    $conf = fnc_delete_words1($_REQUEST['swear']);
    echo $conf;
}
