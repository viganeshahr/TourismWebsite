<?php
include("includes/Aconfig.php");
include("includes/classes/AAccount.php");
include("includes/classes/CConstants.php");
$account = new AAccount($conn);
include("includes/handlers/Aloginhandler.php"); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
  <body style="background: url(Images/ManjarabadFort1.jpg) no-repeat no-repeat center;">
	
	<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="Login.php">
					<span class="login100-form-logo">
						<i class="fa fa-user" aria-hidden="true"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27" id="title">
						Log in
					</span>

					<div class="wrap-input100 validate-input" >
						<input class="input100" id="usernamev" type="text"  name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div id="errorusername">
				    <span style="color: red"></span> </div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" id="passwordv" type="password"  name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div id="errorpassword">
				    <span style="color: red"></span> </div>
		 <div id="loginfailed">
				    <span style="color: red"></span> </div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="Log" id="login">
							Login
						</button>
					</div>

					<div class="text-center p-t-30">
						
							<div class="text-center ">
							<a class="txt1" href="Resgister.php">
								New User? Register Here!
							</a>
						</div>
						</div>

					</div>



				</form>
			</div>
		</div>
	</div>
	
  </body>
</html>