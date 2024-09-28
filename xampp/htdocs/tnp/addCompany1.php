<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Tnp | Add Company</title>
</head>
<body>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="111.jpg" style="width:100%;height:300px"alt="Los Angeles">
    </div>

    <div class="item">
      <img src="222.jpg" alt="Chicago" style="width:100%;height:300px">
    </div>

    <div class="item">
      <img src="333.jpg" alt="New York" style="width:100%;height:300px">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<?php
session_start();
if(isset($_SESSION['u'])==false)
{
    echo "<script>window.location='adminLogin.php'</script>";
}
?>

<!-- NAVIGATION BAR -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    <!-- <a class="navbar-brand" href="index.php">HOME</a> -->
    </div>
    <ul class="nav navbar-nav">
    <li><a href="addCompany.php">Add Company</a></li>     
    <li><a href="viewCompany.php">View Company</a></li>
    <li><a href="shortlistedStudent.php">Shortlisted Student</a></li> 
    <li><a href="addNotification.php">Add Notification</a></li>                         
    <li><a href="exam.php">Exam</a></li>
    <li><a href="selectedStudent.php">Selected Student</a></li>
    <li><a href="adminLogout.php">Logout</a></li>
    </ul>
  </div>
</nav>


    <?php

        $a=$_POST['t1'];
        $b=$_POST['t2'];
        $c=$_POST['t3'];        
        $d=$_POST['t4'];
        $e=$_POST['t5'];
        $f=$_POST['t6'];
        $g=$_POST['t7'];
        $h=$_POST['t8'];
        $con=mysqli_connect('localhost','root','','tnpsys');
        $q="insert into addcompany values('$a', '$b', '$c','$d','$e','$f','$g', '$h')";
        $rs=mysqli_query($con, $q);
        if($rs)
            echo"Company added Successfully";
        else    
            echo"Error";
        ?>    
</body>
</html>