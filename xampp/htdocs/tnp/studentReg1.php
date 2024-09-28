<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Student Registration</title>
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

<!-- NAVIGATION BAR -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    <!-- <a class="navbar-brand" href="index.php">HOME</a> -->
    </div>
    <ul class="nav navbar-nav">
    <li><a href="studentReg.php">Student Registration</a></li>
    <li><a href="editStudentReg.php">Edit Student Registration</a></li>     
    <li><a href="studentLogin.php">Student Login</a></li>
    <li><a href="adminLogin.php">Admin Login</a></li>                         
    </ul>
  </div>
</nav>


<?php
        $a=$_POST['t1'];
        $b=$_POST['t2'];
        $c=$_POST['x'];
        $d=$_POST['y'];
        $e=$_POST['t3'];
        $f=$_POST['g'];
        $g=$_POST['t4'];
        $h=$_POST['t5'];
        $i=$_POST['t6'];
        $j=$_POST['t7'];
        $k=$_POST['t8'];
        $l=$_POST['t9'];
        $m=$_POST['t10'];
        $n=$_POST['t11'];
        $o=$_POST['t12'];
        $p=$_POST['t13'];
        $q=$_POST['t14'];
        $r=$_POST['t15'];
        $stn=$_FILES['t16']['tmp_name'];
        $sfn=$_FILES['t16']['name'];
        $t=$_POST['t17'];
        $con=mysqli_connect('localhost','root','','tnpsys');
        $q="insert into sreg values($a, '$b', '$c','$d','$e','$f','$g', '$h', '$i', '$j', '$k', '$l', '$m','$n','$o','$p','$q', '$r','$sfn','$t')";
        $rs=mysqli_query($con, $q);
        if(move_uploaded_file($stn,$sfn))
        {
            // echo"Resume Uploaded";
        }
        else{
            // echo"Error in uploading file";
        }
        if($rs)
            echo"Student registration succcesfull";
        else    echo"Error";
    ?>




          

  </body>
</html>