<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/Hridoy/config.php');

use Bitm\User;

$_admin = new User();
$_admin->update();
