<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <title>Tnp | Admin Login</title>
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


<div class="row" <!--style="background-image:url('111.jpg');background-size:1200px 600px;margin:0px;-->">
<div class="col-md-2"></div>
<div class="col-md-8" >


<form action="adminLogin1.php"  name="admLogin" method="post" 
        enctype="multipart/form-data">

        Id<input type="text" name='t1' id="t1" class="form-control" placeholder="Enter your Admin Id"><br>
        Password<input type="text" name='t2' id="t2" class="form-control" placeholder="Enter your password"><br>
        <input type="submit" value="Login" class="btn btn-info x">
    </form>    
</div>
<div class="col-md-2"></div>
</div>



<script>
        // Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='admLogin']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      t1: {
        required: true,
        minlength: 3
      },
      t2:{
        required: true,
        minlength: 3
      }
    },
    // Specify validation error messages
    messages: {
      t1: {
        required: "Please enter your id",
        minlength: "Your id must be atleast 3 characters long"
      },      
      t2: {
        required: "Enter your password",
        minlength: "Your password must be at least 3 characters long"
      },
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>



</body>
</html>