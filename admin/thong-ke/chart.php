<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['TÊN LOẠI', 'SỐ LƯỢNG'],
          <?php
            foreach ($items as $item){
            echo "['$item[ten_loai]', $item[so_luong]],";
        }
        ?>
        ]);

        var options = {
          title: 'THỐNG KÊ HÀNG HÓA THEO SỐ LƯỢNG'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
    <form action="index.php" method="post">
    <button class="btn btn-primary" name="btn_list">XEM BẢNG THỐNG KÊ</button><br>
    </form>
    <br>
  </body>
</html>