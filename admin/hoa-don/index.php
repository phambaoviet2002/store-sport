
<?php
require "../../global.php";

require "../../dao/hoa-don-chi-tiet.php";
//--------------------------------//
extract($_REQUEST);

$items = hoa_don_chi_tiet_select_all();
$VIEW_NAME = "hoa-don/list.php";

require "../layout.php";
?>