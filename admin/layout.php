<?php
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?=$CONTENT_URL?>/fonts/font.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load("current", {packages:["corechart"]});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
var data = google.visualization.arrayToDataTable([
['Loại', 'Số Lượng'],
<?php
foreach ($items as $item){
echo "['$item[ten_loai]', $item[so_luong]],";
}
?>
]);
var options = { title: ‘THỐNG KÊ HÀNG HÓA', is3D: true };
var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
chart.draw(data, options);
}
</script>
</head>
<body>
    <div class="container mt-3">
        <header>
            <h1 class="alert alert-info">QUẢN TRỊ WEBSITE</h1>
        </header>
        <nav>
           <?php
              include "menu.php";
           ?>
        </nav>
    
        <br>
        <div>
            <?php include $VIEW_NAME;?>
        </div>
        <div>
<?php
if(strlen($MESSAGE)){
echo "<h5>$MESSAGE</h5>";
}
?>
        </div>
<footer class="alert alert-info">
  @ PHẠM BẢO VIỆT
</footer>

    </div>
    
</body>
</html>