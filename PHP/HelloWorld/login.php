<!DOCTYPE html>
<html lang="en">
  <head>
  	  <title>Password Verification</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
  <link href="login.css" rel='stylesheet' type='text/css' />
<!--    <link href="css/style.css" rel='stylesheet' type='text/css' /> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
  <script src="http://code.jquery.com/jquery-1.7.min.js"></script>
  <script src="login.js"></script>

  </head>

<body>
<div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
    <div class="container-fluid">
        <div class="navbar-header"><a class="navbar-brand" href="index.php">DocApp<img src=images/hosp.png></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="hello.php">Sign Up</a>
                </li>
                <li><a href="login.php">Login to your account</a>
                </li>
               <!--  <li><a href="login.php">Admin Login</a>
                </li> -->
            </ul>
        </div>
    </div>
</div>
 <div class="col-lg-6">
      
<h1> Admin Login </h1>


<div id = "textar"> <h4>Admin users, login here!</h4> </div>
 <div id="container">
  

<h1>Sign in - Admin account</h1>
<form method="post">
    <ul>
        <li>
            <label for="adminId">Admin ID:</label>
            <span><input id="adminId" name="adminId" type="text" /></span>
        </li>
        <li>
            <label for="apswd">Password:</label>
            <span><input id="apswd" type="password" name="apswd" /></span>
        </li>
        <li>
            <input type="submit" value="Admin Login" name="asub" >
        </li>
    </ul>
    <p id="alMsg" align="center"></p>
</form>

<!-- <div id="pswd_info">
    <h4>Password must meet the following requirements:</h4>
    <ul>
        <li id="letter" class="invalid">At least <strong>one letter</strong></li>
        <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
        <li id="number" class="invalid">At least <strong>one number</strong></li>
        <li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
    </ul>
</div> -->


    </div>
  </div>

   <div class="col-lg-6">
    <h1> User Login </h1>

    <div id = "textar"> <h4>If you are a registered user, login to your account here</h4> </div>
     <div id="container">
  

<h1>Sign in to your account</h1>
<form method="post">
    <ul>
        <li>
            <label for="username">Email ID:</label>
            <span><input id="username" name="username" type="text" /></span>
        </li>
        <li>
            <label for="pswd">Password:</label>
            <span><input id="pswd" type="password" name="pswd" /></span>
        </li>
        <li>
            <input type="submit" value="Login" name="sub" >
        </li>
    </ul>
      <p id="ulMsg" align="center"></p>
</form>
<!-- 
<div id="apswd_info">
    <h4>Password must meet the following requirements:</h4>
    <ul>
        <li id="letter" class="ainvalid">At least <strong>one letter</strong></li>
        <li id="capital" class="ainvalid">At least <strong>one capital letter</strong></li>
        <li id="number" class="ainvalid">At least <strong>one number</strong></li>
        <li id="length" class="ainvalid">Be at least <strong>8 characters</strong></li>
    </ul>
</div> -->


    </div>
  </div>
<?php
$servername = "db4free.net:3306";
$username = "janabsrinivas";
$password = "johnatus";
$dbname = "hibernate_mytest";

// Create connection
$dbcon = mysqli_connect($servername, $username, $password);
   
   if (!$dbcon) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_select_db($dbcon,$dbname);

if(isset($_POST['sub'])){
  $username = $_POST['username'];
  $password = $_POST['pswd'];
  $sql = "SELECT * FROM Customer WHERE email = '".$username."' AND psw = '".$password."' LIMIT 1";
  $res = mysqli_query($dbcon,$sql);
  if(mysqli_num_rows($res)==1){
    echo "<script>
                $(document).ready(function(){
                   alert('Sucess !');
                   $('#username').removeClass('object_error');
                   $('#username').addClass('object_ok');
                   $('#pswd').removeClass('object_error');  
                   $('#pswd').addClass('object_ok');  
                  });
            </script>";
  // exit();
  }
else{// Write code here to navigate to appropriate page !
  echo "<script>
                $(document).ready(function(){
                   $('#ulMsg').html('<font color=red> Invalid Credentials. Try Again !</font>');
                   $('#username').removeClass('object_ok');
                   $('#username').addClass('object_error'); 
                   $('#pswd').removeClass('object_ok');
                   $('#pswd').addClass('object_error');   
                  });
            </script>";
   // exit();
}
}


if(isset($_POST['asub'])){

  $adminId = $_POST['adminId'];
  $apassword = $_POST['apswd'];
  $asql = "SELECT * FROM Admin WHERE admin_id = '".$adminId."' AND pwd = '".$apassword."' LIMIT 1"; 
  $result = mysqli_query($dbcon,$asql);
  if(mysqli_num_rows($result)==1){
    echo "<script>
                $(document).ready(function(){
                   alert('Sucess !');
                   $('#adminId').removeClass('object_error');
                   $('#adminId').addClass('object_ok');
                   $('#apswd').removeClass('object_error');  
                   $('#apswd').addClass('object_ok');  
                  });
            </script>";
   //exit();
  }
else{ // Write code here to navigate to appropriate page !
  echo "<script>
                $(document).ready(function(){
                   $('#alMsg').html('<font color=red> Invalid Credentials. Try Again ! </font>');
                   $('#adminId').removeClass('object_ok');
                   $('#adminId').addClass('object_error'); 
                   $('#apswd').removeClass('object_ok');
                   $('#apswd').addClass('object_error');   
                  });
            </script>";
    //exit();
}
}
mysqli_close($dbcon);
?>      
</body>
</html>
