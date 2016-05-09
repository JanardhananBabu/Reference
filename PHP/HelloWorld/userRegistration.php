
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
  <link href="style.css" rel='stylesheet' type='text/css' /><!-- change the location accordingly -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
  <script src="script.js"></script>
  <script src="hello.js"></script><!-- change the location accordingly -->
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
                <li><a href="login.php">User Login</a>
                </li>
                <li><a href="login.php">Admin Login</a>
                </li>
            </ul>
        </div>
    </div>
</div>

	 <div class="container"> 
	     <div class="register">
	     	<h1> REGISTER! </h1>
		  	  <form id="regform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
				 <div class="register-top-grid">
					<h3>PERSONAL INFORMATION</h3>
					 <table>
					 <tr>
						<td><label for="fname">Firstname*:</label></td>
						<td><input type="text" class="text" id="fname" name="fname"></td>
							<td align="left" id="fn_status"></td>
					 </tr>
					 <tr>
						<td><label for="lname">Lastname*:</label></td>
						<td><input type="text" class="text" id="lname" name="lname"></td>
							<td align="left" id="ln_status"></td>
					 </tr>
					 <tr>
						<td><label for="phone_number">Phone Number (format: xxx-xxx-xxxx):</label></td>
 						<td><input class="text" id="phone_number" name="phone_number" type="tel" pattern="^\d{3}\d{3}\d{4}$" ></td>
					</tr>
					 <tr>
						 <td><label for="email">Email Address*:</label></td>
						 <td><input type="email" class="text" id="email" name="email"></td>
						 <td><input type="hidden" id="estatus" name="estatus"/></td>
						 	<td align="left" id="status"></td>
					 </tr>
					</table>
					 </div>
				     <div class="register-bottom-grid">
						    <h3>LOGIN INFORMATION</h3>
						    <table>
						    <tr>
							 <td>
								<label for="psw">Password*:</label></td>
								<td><input type="password" class="text" id="password" name="psw"></td>
									<td align="left" id="pw_status"></td>
							 </tr>
							 <tr>
								<td><label for="confpsw">Confirm Password*:</label></td>
								<td><input type="password" class="text" id="confirm_password" name="confpsw"></td>
									<td align="left" id="cpw_status"></td>
							 </tr>
							</table>
							 <div>
							 	<input type="submit" id="submit" name="sub" value="submit">
							 </div>
					 </div>
				</form>	
		</div>
	</div>

	<div id="pswd_info">
	    <h4>Password must meet the following requirements:</h4>
	    <ul>
	        <li id="letter" class="invalid">At least <strong>one letter</strong></li>
	        <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
	        <li id="number" class="invalid">At least <strong>one number</strong></li>
	        <li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
	    </ul>
	</div>
		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$formFName = $_POST["fname"];
				$formLName = $_POST["lname"];
				$formEmail = $_POST["email"];
				$formEmailStatus = $_POST["estatus"];
				$formPhNo = $_POST["phone_number"];
				$formPWD = $_POST["psw"];
				$formCPWD = $_POST["confpsw"];
					         
				echo "<script>
					      $(document).ready(function(){
					         $('#fname').val('".$formFName."');
					         $('#lname').val('".$formLName."');
					         $('#email').val('".$formEmail."');
					         $('#status').html('".$formEmailStatus."');
					         $('#phone_number').val('".$formPhNo."');
				       		});
						</script>";

				if(empty($formFName)) {
					echo "<script>
					      $(document).ready(function(){
					         $('#fn_status').html('<font color=red>' +'please enter your first name</font>');
					         $('#fname').removeClass('object_ok');
					         $('#fname').addClass('object_error');  
				       		});
						</script>";
				}
				else {
					echo "<script>
					      $(document).ready(function(){
				        	$('#fn_status').html('');
					         $('#fname').addClass('object_ok');
					         $('#fname').removeClass('object_error');
				       	   });
						</script>";
				}
				if(empty($formLName)) {
					echo "<script>
					      $(document).ready(function(){
					         $('#ln_status').html('<font color=red>' +'please enter your last name</font>');
					         $('#lname').removeClass('object_ok');
					         $('#lname').addClass('object_error');  
				       		});
						</script>";
				}
				else {
					echo "<script>
					      $(document).ready(function(){
			        		 $('#ln_status').html('');
					         $('#lname').addClass('object_ok');
					         $('#lname').removeClass('object_error');
				       		});
						</script>";
				}
				if(empty($formEmail)) {
					echo "<script>
					      $(document).ready(function(){
					         $('#status').html('<font color=red>' +'Please enter your email</font>');
					         $('#email').removeClass('object_ok');
					         $('#email').addClass('object_error');  
				       		});
						</script>";
				}
				else {
					if(!empty($formEmailStatus)){
			         	echo "<script>
						      $(document).ready(function(){
					         $('#email').removeClass('object_ok');
					         $('#email').addClass('object_error'); 
					         });
							</script>";
			     	 }
			     	 else {
						echo "<script>
						      $(document).ready(function(){
						         $('#email').addClass('object_ok');
						         $('#email').removeClass('object_error');
					       		});
							</script>";
					}
				}
				if(empty($formPWD) || empty($formCPWD)){
					echo "<script>
					      $(document).ready(function(){
					         $('#pw_status').html('<font color=red>' +'Please enter your password</font>');
					         $('#password').removeClass('object_ok');
					         $('#password').addClass('object_error');  
					         $('#cpw_status').html('<font color=red>' +'Please re-enter your password</font>');
					         $('#confirm_password').removeClass('object_ok');
					         $('#confirm_password').addClass('object_error');
				       		});
						</script>";
				}
				else {
					if($formPWD!==$formCPWD) {
						echo "<script>
						      $(document).ready(function(){
						      	 $('#pw_status').html('<font color=red>' +'Please enter your password correctly </font>');
						         $('#password').removeClass('object_ok');
						         $('#password').addClass('object_error');
						         $('#cpw_status').html('<font color=red>' +'Please re-enter the same password correctly </font>');
						         $('#confirm_password').removeClass('object_ok');
						         $('#confirm_password').addClass('object_error');
					       		});
							</script>";
					}
					else {
						if(!empty($formPWD) && !empty($formPWD) ) {
							echo "<script>
									$(document).ready(function(){
											$('#pw_status').html('<font color=red>' +'Please enter a valid password</font>');
											$('#cpw_status').html('<font color=red>' +'Please re-enter a valid password</font>');
						       		});
								</script>";
						}
					}
				}

		  	}
		?>	
  </body>
</html>