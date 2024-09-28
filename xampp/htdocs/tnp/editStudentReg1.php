<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Tnp | Edit Student Reg</title>
    <style>
        .x
        {
            margin-left:70px;
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


    <form action="editStudentReg2.php" method="post" 
        enctype="multipart/form-data">

        <?php
                $a=$_POST['t1'];
                $con=mysqli_connect('localhost','root','','tnpsys');        
                $q="select * from sreg where rno=$a";
                $rs=mysqli_query($con, $q);
                while($row=mysqli_fetch_array($rs))
                {
                    echo"<table border=2 class='table'>
                    <tr><td>  rno <input type='text' name='t1'class='form-control' value='$row[rno]'></td></tr>
                    <tr><td> name<input type='text' name='t2' class='form-control' value='$row[name]'><br></td></tr>
                    <tr><td>Branch<select name='x' class='form-control' value='$row[branch]'>
                                  <option>.....</option>
                                  <option>MCA</option>
                                  <option>CSE</option>
                                  <option>IT</option>
                                  <option>Mech</option></select></td></tr>
                    <tr><td>Semester<select name='y'class='form-control' value='$row[sem]'>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>                                
                                </select></td></tr>
                    <tr><td>E-mail<input type='text'name='t3'class='form-control' value='$row[email]' placeholder='Enter your E-mail id'></td></tr>            
                    <tr><td>Gender<input type='radio' name='g' value='$row[gender]' value='male'>Male
                                  <input type='radio' name='g' value='$row[email]'value='female'>Female</td></tr> 
                    <tr><td>Mobile No.<input type='text'name='t4'class='form-control' value='$row[mob]' placeholder='Enter your Mobile No.'></td></tr>
                    <tr><td>Addres<input type='text'name='t5'class='form-control' value='$row[address]'placeholder='Enter your Current Address'></td></tr>                        
                    
                    <tr><td><label class='x'>Below Enter your classs 10th details</label></td></tr>
                    <tr><td>Percentage<input type='text'name='t6'class='form-control'value='$row[tenthp]' placeholder='Enter your percentage'></td></tr>
                    <tr><td>Board<input type='text'name='t7'class='form-control' value='$row[tenthb]' placeholder='Enter your board'></td></tr>
                    <tr><td>Passing Year<input type='text'name='t8'class='form-control' value='$row[tenthpy]' placeholder='Enter your passing year'></td></tr>
        
                    <tr><td><label class='x'>Below Enter your classs 12th details</label></td></tr>
                    <tr><td>Percentage<input type='text'name='t9'class='form-control' value='$row[twelthp]' placeholder='Enter your percentage'></td></tr>
                    <tr><td>Board<input type='text'name='t10'class='form-control' value='$row[twelthb]' placeholder='Enter your board'></td></tr>
                    <tr><td>Passing Year<input type='text'name='t11'class='form-control' value='$row[twelthpy]' placeholder='Enter your passing year'></td></tr>
        
                    <tr><td><label class='x'>Below Enter your graduation details</label></td></tr>
                    <tr><td>Percentage<input type='text'name='t12'class='form-control' value='$row[gp]' placeholder='Enter your percentage'></td></tr>
                    <tr><td>Board<input type='text'name='t13'class='form-control' value='$row[gb]' placeholder='Enter your board'></td></tr>
                    <tr><td>Passing Year<input type='text'name='t14'class='form-control' value='$row[gpy]' placeholder='Enter your passing year'></td></tr>
                    <tr><td>Hobbies<input type='text'name='t15'class='form-control' value='$row[hobbies]' placeholder='Enter your hobbies'></td></tr>
                    <tr><td>Resume<input type='file'name='t16'class='form-control' value='$row[resume]' placeholder='Upload your Resume'></td></tr>
                    <tr><td>Password<input type='password'name='t17'class='form-control' value='$row[password]' placeholder='Create your Password'></td></tr>
                </table>
                   ";

                }
        ?>
        <input type="submit" value="Edit" class="btn btn-info">
     </form>
</body>
</html>
    
</body>
</html>