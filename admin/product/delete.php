<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/Hridoy/config.php');

use Bitm\Product;
$_id = $_GET['id'];
$_product = new Product();
$_product->delete($_id);


