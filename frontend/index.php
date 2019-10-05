<html>
    <?php 
        session_start();
        if($_SESSION['connected'] != 1) header("Location: login");
        require("header.php");
    ?>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href=""><img src="eclair.jpg" style="width:25px; height:25px;"/></a>
            </div>
            <ul class="nav navbar-nav">
            <li class="active"><a href="">Dashboard</a></li>
            <li><a href="account">Account</a></li>
            <li><a href="graphs">Graphs</a></li>
            </ul>
        </div>
    </nav>
    <body>
    <link rel="stylesheet" href="home.css">
    <div class="grid-container count2">
        <div>
            <h1> Storage </h1> <br />
            <h3> You have 13.5 KWH </h3>
            <h3> Today : <span style="color:green"> +3.5 </span>KWh</h3>
        </div>
        <div class = "length3">
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
                ['05.10.2019',  1650,      210]
                ]);

                var options = {
                    height: 200,
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
    <div class="grid-container count3">
        <div style="text-align:left;padding-left:15px" class = "length2">
            <h1> List of trade - </h1>
            <h3>- you borrowed 6.5 kwh from Mickel</h3>
            <h3>- you borrowed 4.3 kwh from Tristan</h3>
        </div>
        <div class = "none"></div>
        <div style="text-align:left;padding-left:15px" class = "length2">
            <h1> List of trade + </h1>
            <h3>+ you loaned Michelle 10 KWH</h3>
            <h3>+ you loaned Bertrand 2.5 KWH</h3>
        </div>
    </div>
    </body>
<html>