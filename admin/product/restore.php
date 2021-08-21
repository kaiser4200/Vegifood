<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/ecommerce_self_new/config.php');

use Bitm\Product;
$_id = $_GET['id'];
$_product = new Product();
$_product->restore($_id);