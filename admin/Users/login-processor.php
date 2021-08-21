<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/Hridoy/config.php');

use Bitm\User;

$user_name = $_POST['user_name'];
$password = $_POST['password'];

function is_empty($value){
    if($value == ''){
        return true;
    }else{
        return false;
    }
}

if(empty($user_name) || empty($password)){
    session_start();
    $_SESSION['message'] = "User name can't be empty. Please enter user name";
    header("location:".$webroot."front/public/login.php");
}else{
    $_user = new User();
    $_user->login($user_name, $password);
}

