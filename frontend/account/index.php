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
            <li class="active"><a href="">Account</a></li>
            <li><a href="../graphs">Graphs</a></li>
            </ul>
        </div>
    </nav>
    <body>
    <link rel="stylesheet" href="../home.css">
    <div class="grid-container count2">
        <div>
            <h1> Storage </h1> <br />
            <h3> You have 13.5 KWH </h3>
            <h3> Today : <span style="color:green"> +3.5 </span>KWh</h3>
        </div>
    </body>
<html>