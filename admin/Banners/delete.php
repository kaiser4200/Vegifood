<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Hridoy/config.php');

use Bitm\Banner;

$_id =$_GET['id'];

$_banner = new \Bitm\Banner();
$_banner->delete($_id);
?>