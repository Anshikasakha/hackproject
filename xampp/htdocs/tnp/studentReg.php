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
    <title>Tnp |  Student Registration</title>

    <style>
        .x
        {
            font-size:20px;
        }
        .y
        {
            margin-left:800px;
        }
        .aa{
          width:200px;
          height:50px;
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


<div class="row" style="margin:0px;"> 
    <form action="studentReg1.php" name="stReg" method="post"
              enctype="multipart/form-data">   
              <div class="col-md-2"></div>
    <div class="col-md-8">
    
    <table border=2 class="table">
            <tr><td>Roll No.<input type="text"name='t1' id="t1" class="form-control aa" placeholder="Create your own id" ></td></tr>
            <tr><td>Name<input type="text"name='t2'id="t2"class="form-control" placeholder="Enter your Name."></td></tr>
            <tr><td>Branch<select name='x' id="x"class="form-control">
                          <option>.....</option>
                          <option>MCA</option>
                          <option>CSE</option>
                          <option>IT</option>
                          <option>Mech</option></select></td></tr>
            <tr><td>Semester<select name='y' id="x"class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>                                
                        </select></td></tr>
            <tr><td>E-mail<input type="email"name='t3'id="t3" class="form-control" placeholder="Enter your E-mail id"></td></tr>            
            <tr><td>Gender<input type="radio" name='g' id="g" value="male">Male
                          <input type="radio" name='g' id="g" value="female">Female</td></tr> 
            <tr><td>Mobile No.<input type="text"name='t4' id="t4"class="form-control" placeholder="Enter your Mobile No."></td></tr>
            <tr><td>Address<input type="text"name='t5' id="t5" class="form-control" placeholder="Enter your Current Address"></td></tr>                        
            
            <tr><td><label class="x">Below Enter your classs 10th details</label></td></tr>
            <tr><td>Percentage<input type="text"name='t6' id="t6" class="form-control" placeholder="Enter your percentage"></td></tr>
            <tr><td>Board<input type="text"name='t7' id="t7" class="form-control" placeholder="Enter your board"></td></tr>
            <tr><td>Passing Year<input type="text"name='t8' id="t8" class="form-control" placeholder="Enter your passing year"></td></tr>

            <tr><td><label class="x">Below Enter your classs 12th details</label></td></tr>
            <tr><td>Percentage<input type="text"name='t9' id="t9" class="form-control" placeholder="Enter your percentage"></td></tr>
            <tr><td>Board<input type="text"name='t10' id="t10" class="form-control" placeholder="Enter your board"></td></tr>
            <tr><td>Passing Year<input type="text"name='t11' id="t11"class="form-control" placeholder="Enter your passing year"></td></tr>

            <tr><td><label class="x">Below Enter your graduation details</label></td></tr>
            <tr><td>Percentage<input type="text"name='t12' id="t12" class="form-control" placeholder="Enter your percentage"></td></tr>
            <tr><td>Board<input type="text"name='t13' id="t13" class="form-control" placeholder="Enter your board"></td></tr>
            <tr><td>Passing Year<input type="text"name='t14' id="t14" class="form-control" placeholder="Enter your passing year"></td></tr>
            <tr><td>Hobbies<input type="text"name='t15' id="t15" class="form-control" placeholder="Enter your hobbies"></td></tr>
            <tr><td>Resume<input type="file"name='t16' id="t16" class="form-control" placeholder="Upload your Resume"></td></tr>
            <tr><td>Password<input type="password"name='t17' id="t17"class="form-control" placeholder="Create your Password"></td></tr>
        <tr><td ><input type="submit"value='Register'class="btn btn-info y"></td></tr>
        </table>
    </div>
    </form>

    <div class="col-md-2"></div>
  </div>
    



  <script>
        // Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='stReg']").validate({
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
      },
      x: {
        required: true,
        // minlength: 2
      },
      y:{
        required: true,
        // minlength: 1
      },
      t3: {
        required: true,
        // minlength: 6
      },
      g: {
        required: true,
        // minlength: 6
      },
      t4:{
        required: true,
        minlength: 10
      },
      t5: {
        required: true,
        // minlength: 10
      },
      t6:{
        required: true,
        minlength: 2
      },
      t7: {
        required: true,
        minlength: 2
      },
      t8:{
        required: true,
        minlength: 4
      },
      t9:{
        required: true,
        minlength: 2
      },
      t10: {
        required: true,
        minlength: 2
      },
      t11:{
        required: true,
        minlength: 4
      },
      t12:{
        required: true,
        minlength: 2
      },
      t13: {
        required: true,
        minlength: 2
      },
      t14:{
        required: true,
        minlength: 4
      },  
      t15: {
        required: true,
        // minlength: 5
      },
      t16:{
        required: true,
        // minlength: 3
      },
      t17:{
        required: true,
        minlength: 3
      }

    },
    // Specify validation error messages
    messages: {
      t1: {
        required: "Please enter your Roll No. which will be your id",
        minlength: "Your id must be atleast 3 characters long"
      },      
      t2: {
        required: "Enter your full name",
        minlength: "Your name must be atleast 3 characters long"
      },
      x: {
        required: "Choose your Branch",
        // minlength: "your Branch must be atleast 3 characters long"
      },      
      y: {
        required: "Choose your semester",
        // minlength: "Your password must be at least 3 characters long"
      },
      t3: {
        required: "Please enter your E-mail id",
        // minlength: "Your id must be atleast 3 characters long"
      },      
      g: {
        required: " ",
        // minlength: "Your id must be atleast 3 characters long"
      },      

      t4: {
        required: "Enter your mobile Number",
        minlength: "Must be at least 10 characters long"
      },
      t5: {
        required: "Please enter your id",
        // minlength: "Your id must be atleast 3 characters long"
      },      
      t6: {
        required: "Enter your percentage without percentage sign",
        minlength: "Your percentage must be atleast 2 characters long"
      },
      t7: {
        required: "Please enter your Board",
        minlength: "Board name must be atleast 2 characters long"
      },      
      t8: {
        required: "Enter your passing year of class 10th",
        minlength: "Your password must be at least 4 characters long"
      },
      t9: {
        required: "Enter your percentage without percentage sign",
        minlength: "Your percentage must be atleast 2 characters long"
      },
      t10: {
        required: "Please enter your Board",
        minlength: "Board name must be atleast 2 characters long"
      },      
      t11: {
        required: "Enter your passing year of class 12th",
        minlength: "Your password must be at least 4 characters long"
      },
      t12: {
        required: "Enter your percentage without percentage sign",
        minlength: "Your percentage must be atleast 2 characters long"
      },
      t13: {
        required: "Please enter your Board",
        minlength: "Board name must be atleast 2 characters long"
      },      
      t14: {
        required: "Enter your passing year of Graduation",
        minlength: "Your password must be at least 4 characters long"
      },
      t15: {
        required: "Enter your Hobbies",
        // minlength: "Your id must be atleast 3 characters long"
      },      
      t16: {
        required: "Upload your Resume",
        // minlength: "Your password must be at least 3 characters long"
      },
      t17: {
        required: "Enter your password",
        minlength: "Your password must be at least 3 characters long"
      }
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