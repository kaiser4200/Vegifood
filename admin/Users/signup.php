<?php
$approot = $_SERVER['DOCUMENT_ROOT'].'/Hridoy/';
$webroot = 'http://localhost/Hridoy';
include_once($approot.'vendor/autoload.php');

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
    header("location:".$webroot."/php/public/signup.php");
}else{
    $_user = new User();
    $_user->signup($data);
}
