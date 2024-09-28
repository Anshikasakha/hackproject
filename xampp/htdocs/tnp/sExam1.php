<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Student | Exam</title>
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
if(isset($_SESSION['v'])==false)
{
    echo "<script>window.location='studentLogin.php'</script>";
}
?>

<!-- NAVIGATION BAR -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    <!-- <a class="navbar-brand" href="index.php">HOME</a> -->
    </div>
    <ul class="nav navbar-nav">
    <li><a href="company.php">Company</a></li>     
    <li><a href="eligibleCompany.php">Eligible Company</a></li>
    <li><a href="sExam.php">Exam</a></li>
    <li><a href="alumini.php">Alumni</a></li>                         
    <li><a href="report.php">Report</a></li>   
    <li><a href="studentLogout.php">Logout</a></li>
    </ul>
  </div>
</nav>


<form action="b.php"> 
<?php
         $a=$_GET['id'];
         $con=mysqli_connect('localhost','root','','tnpsys');        
         $q="select * from exam where cname='$a' ";
         $rs=mysqli_query($con, $q);
         $i=1;
         $c=0;
         while($row=mysqli_fetch_array($rs))
         {
          $c++;
          $k="x$i";
          $k2="y$i";
            echo"
                $row[que]<br>
                <input type='radio' name='$k' value='$row[op1]'>$row[op1]<br>
                <input type='radio' name='$k' value='$row[op2]'>$row[op2]<br>
                <input type='radio' name='$k' value='$row[op3]'>$row[op3]<br>
                <input type='radio' name='$k' value='$row[op4]'>$row[op4]<br><br>
                <input type='hidden' name='$k2' value='$row[ans]'>
            ";
            $i++;
         }

         $_SESSION['count']=$c;
?>
        <input type="submit" class="btn btn-info">
        </form>    
</body>
</html>





        </br></br></br></br></br></br>