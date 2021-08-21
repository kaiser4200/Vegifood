<?php
$approot = $_SERVER['DOCUMENT_ROOT'].'/Hridoy/';
$webroot = 'http://localhost/Hridoy';
include_once ($approot.'vendor/autoload.php');


$_brand = new \Bitm\Brand();
$_brand->delete();
?>