<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Hridoy/config.php');

use Bitm\Banner;

$data = $_POST;

$_banner = new \Bitm\Banner();
$_banner->update($data);
?>