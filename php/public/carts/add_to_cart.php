<?php
$approot = $_SERVER['DOCUMENT_ROOT'].'/Hridoy/';
$webroot = 'http://localhost/Hridoy';
include_once($approot.'vendor/autoload.php');

use Bitm\Cart;

$_POST['total_price'] = $_POST['qty'] * $_POST['unit_price'];
$_cart = new Cart();
$_cart->add_to_cart();