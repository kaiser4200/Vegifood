<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/Hridoy/config.php');

use Bitm\Product;
$data = $_POST;
$_product = new Product();
$_product->update($data);






