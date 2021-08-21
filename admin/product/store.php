<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/Hridoy/config.php');

use Bitm\Product;

$data=$_POST;

//Validate title
function is_empty($value){
    if($value ==''){
        return true;
    }
    else{
        return false;
    }
}

if(is_empty($data['pro_title'])){
    session_start();
    $_SESSION['message'] = "Title can' be empty.Plese enter a title";
    header("location:create.php");
}
else{
    $_product = new Product();
    $_product->store($data);
}




