<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Add Company</title>
    <style>
        .x
        {
            font-size:20px;
        }
        .y
        {
            margin-left:750px;
        }
    </style>
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
    <li><a href="studentLogout.php">Logout</a></li>
    </ul>
  </div>
</nav>

<div class="row"> 
    <form action="addCompany1.php" method="post"
              enctype="multipart/form-data">   
              <div class="col-md-2"></div>
    <div class="col-md-8">
    
    <table border=2 class="table">
  <tr>
    <th>Company Name</th>
    <th>url</th>
    <th>Selection Process</th>
    <th>10th</th>
    <th>12th</th>
    <th>Graduation</th>
    <th>Post Graduation</th>
    <th>Backlog Allowed</th>
  </tr>


            <!-- <tr><td><label class="x">Below Enter your company details</label></td></tr>
            <tr><td>Company Name<input type="text"name='t1'class="form-control" placeholder="Enter Company Name"></td></tr>
            <tr><td>Url<input type="url"name='t2'class="form-control" placeholder="Company Url"></td></tr>
            <tr><td>Selection Process<input type="text"name='t3'class="form-control" placeholder="Create your Password"></td></tr>
            <tr><td><label class="x">Criteria of the company</label></td></tr>
            <tr><td>10th<input type="text"name='t4'class="form-control" placeholder="Create your Password"></td></tr>
            <tr><td>12th<input type="text"name='t5'class="form-control" placeholder="Create your Password"></td></tr>
            <tr><td>Graduation<input type="text"name='t6'class="form-control" placeholder="Create your Password"></td></tr>
            <tr><td>Post Graduation<input type="text"name='t7'class="form-control" placeholder="Create your Password"></td></tr>
            <tr><td>Backlog allowed<input type="text"name='t8'class="form-control" placeholder="Create your Password"></td></tr>
        <tr><td ><input type="submit"value='Save'class="btn btn-info y"></td></tr> -->
    </div>
    </form>

    <?php
         $con=mysqli_connect('localhost','root','','tnpsys');        
         $q="select * from addcompany";
         $rs=mysqli_query($con, $q);
         while($row=mysqli_fetch_array($rs))
         {
            echo"<tr>
            <td>$row[cname]</td>
            <td><a href='$row[url]'>Link</a></td>
            <td>$row[sProcess]</td>
            <td>$row[tenth]</td>
            <td>$row[twelth]</td>
            <td>$row[graduation]</td>
            <td>$row[pg]</td>
            <td>$row[backlog]</td></tr>
            ";
         }                 
    ?>
</table>
</body>
</html>