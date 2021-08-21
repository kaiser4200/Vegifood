<?php
$approot = $_SERVER['DOCUMENT_ROOT'].'/Hridoy/';
$webroot = 'http://localhost/Hridoy';
include_once($approot.'vendor/autoload.php');

use Bitm\Cart;

$_cart = new Cart();
$_cart->delete();