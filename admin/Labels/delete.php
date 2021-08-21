<?php
$approot = $_SERVER['DOCUMENT_ROOT'].'/Hridoy/';
$webroot = 'http://localhost/Hridoy';
include_once ($approot.'vendor/autoload.php');


$_label = new \Bitm\Label();
$_label->delete();
?>