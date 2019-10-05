<html>
    <?php 
        session_start();
        if($_SESSION['connected'] != 1) header("Location: login");
        require("../header.php");
    ?>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href=""><img src="../eclair.jpg" style="width:25px; height:25px;"/></a>
            </div>
            <ul class="nav navbar-nav">
            <li><a href="../">Dashboard</a></li>
            <li><a href="../account">Account</a></li>
            <li class="active"><a href="">Graphs</a></li>
            </ul>
        </div>
    </nav>
    <body>
    <link rel="stylesheet" href="../home.css">
    <div class="grid-container count">
        <div class = "length4">
            <h1 style="text-align:left;padding-left:15px"> Historical production/consumption</h1>
            <head>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                ['Day', 'Production', 'Consumption'],
                ['01.10.2019',  1000,      400],
                ['02.10.2019',  1170,      460],
                ['03.10.2019',  660,       1120],
                ['04.10.2019',  1030,      540],
                ['04.10.2019',  1650,      210]
                ]);

                var options = {
                height: 200,
                width: 1200,
                curveType: 'function',
                legend: { position: 'bottom' }
                };

                var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                chart.draw(data, options);
            }
            </script>
        </head>
        <body>
            <div id="curve_chart" style="width: 900px; height: 500px"></div>
        </body>
        </div>
    </div>
    </body>
<html>