<?php
require_once "../../global.php";
require_once "../../dao/thong-ke.php";


if(exist_param("btn_chart")){
    $items =  thong_ke();
$VIEW_NAME = "thong-ke/chart.php";
}
else{
    $items =  thong_ke();
$VIEW_NAME = "thong-ke/list.php";
}

require "../layout.php";

?>