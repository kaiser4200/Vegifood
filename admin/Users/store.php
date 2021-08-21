<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/Hridoy/config.php');

use Bitm\User;

$data = $_POST;

function is_empty($value){
    if($value == ''){
        return true;
    }else{
        return false;
    }
}

if(is_empty($data['user_name'])){
    session_start();
    $_SESSION['message'] = "User name can't be empty. Please enter user name";
    header("location:create.php");
}else{
    $_user = new User();
    $_user->store($data);
}
