<?php
$approot = $_SERVER['DOCUMENT_ROOT'].'/Hridoy/';
$webroot = 'http://localhost/Hridoy';
include_once($approot.'vendor/autoload.php');

use Bitm\Product;

$_product = new Product();
$_product->store();