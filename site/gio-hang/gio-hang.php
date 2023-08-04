<?php
error_reporting(0);
require '../../global.php';
require '../../dao/hang-hoa.php';
require '../../dao/hoa-don.php';
require '../../dao/hoa-don-chi-tiet.php';
//-------------------------------//
extract($_REQUEST);

$VIEW_NAME = "gio-hang/gio-hang-ui.php";
require '../layout.php';
?>