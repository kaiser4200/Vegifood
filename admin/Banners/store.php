<?php
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
include_once ($_SERVER['DOCUMENT_ROOT'].'/Hridoy/config.php');

use Bitm\Banner;

$data = $_POST;

//Validate Title
function is_empty($value)
{
    if ($value == '') {
        return true;
    } else {
        return false;
    }

}

if(is_empty($data['title'])) {
    session_start();
    $_SESSION['message'] = "Title can't be empty. Plese enter a title";
    header("location:create.php");
}else{
    $_banner = new Banner();
    $_banner->store($data);
}


?>