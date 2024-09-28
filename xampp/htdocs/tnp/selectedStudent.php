<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Adminn Dashboard</title>
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
$a=$_SESSION['u'];
if(isset($_SESSION['u'])==false)
{
    echo "<script>window.location='adminLogin.php'</script>";
}
echo "$a";
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
<style>
.x
{
  margin-left:100px;
  font-size:30px;
}

</style>

<div class="row"> 
    <form action="selectedStudent1.php" method="post"
              enctype="multipart/form-data">   
              <div class="col-md-2"></div>
    <div class="col-md-8">
    <table border=2 class="table">

    <tr><td><p class='x'>Package</p><input type="text"name='t1'class="form-control" placeholder="Enter your package"></td></tr>
    <tr><td>Year<input type="text"name='t2'class="form-control"></td></tr>
    <tr><td>Roll No.<select name="t3" class="form-control">
                      <?php
                        $con=mysqli_connect('localhost','root','','tnpsys');
                        $q="select * from sreg";
                        $rs=mysqli_query($con, $q);                                        
                        while($row=mysqli_fetch_array($rs))
                        {
                          echo"<option> $row[rno]</option>";
                        }
                      ?>
                    </select>
    </td></tr>
    <tr><td>Company Name<select name='x'class="form-control">
                                    <option>TCS</option>
                                    <option>Wipro</option>
                                    <option>Infosys</option>
                                    <option>Cognizent</option>
                                    <option>Accenture</option>
                                    <option>Capgemini</option>
                                    <option>Tech Mahendra</option>
                                    <option>IBM</option>
                                    <option>Microsoft</option>
                                    <option>Google</option>
                                    <option>Amazon</option>
                                    <option>Facebook</option>
                                    <option>Flipcart</option>
                                    <option>Byjus</option>
                                    <option>Twitter</option>
                                    <option>Apple</option>
                                    <option>Intel</option>
                                    <option>Cisco</option>
                                    <option>Netflix</option>
                                    <option>Walmart</option>
                                    <option>Nvidia</option>
                                    <option>Deloitte</option>
                                    <option>Oracle</option>
                                    <option>Morgan Stanley</option>                                
             </select></td></tr>
             <tr><td><input type="submit"value='Save'class="btn btn-info x"></td></tr>

</div>
</table>
<div class="col-md-2"></div>
</form>
    
</body>
</html>