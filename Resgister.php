<?php
include("includes/Aconfig.php");
include("includes/classes/AAccount.php");
$account = new AAccount($conn);
include("includes/handlers/Aregistrhandler.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" type="text/css" href="bootstrap1/css/bootstrap.min.css" /> <!-- THIS IS USED FOR THE USER LOGO -->
	
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style type="text/css">
	.input-group {
  position: relative;
  margin-bottom: 30px;
  border-bottom: 2px solid #ccc;
  background: transparent;
}

.input--style-1 {
  padding: 9px 0;
  color: white;
  background: transparent;
  width: 100%;
}

.input--style-1::-webkit-input-placeholder {
  
  color: white;
}




</style>
</head>
<body style="background-image: url(Images/ManjarabadFort1.jpg); 
  " >
	
	<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100">
				<form class="login100-form validate-form" id="Registration" method="POST" action="Resgister.php" >

					<span class="login100-form-title p-b-34 p-t-27">
						Registration Info
					</span>

					<div class="input-group" >
						<span style="color: red"></span>
						<input class="input--style-1"  type="text" name="Name" id="name" placeholder="Name">
					</div>

				 	<div class="input-group" >
				 		<span style="color: red"></span>
						<input class="input--style-1"  type="text" name="Username" id="Username" placeholder="Username">
					</div>

					<div class="row"  >
						<span class="col" style="color: white;  width: 50%">Date Of Birth :</span>
						<span class="col" style="margin-left: 30%;color: white; ">Gender :</span>
					</div>
					<br>
				    <div class="row" style="margin-left: 1px" >
					<span class="col" style="width: 50%; ">

						<input   type="date" name="Birthday" id="Birthday">
						<i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i> 
					</span>
					
 					<span class="col" style="margin-left: 20%" >
					                    <select  name="Gender" id="Gender" >
                                            <option disabled="disabled" style="color: black;" selected="selected">GENDER</option>
                                            <option style="color: black;">Male</option>
                                            <option style="color: black;">Female</option>
                                            <option style="color: black;">Other</option>
                                        </select>
					</span>
					</div>
					<br>
					<div class="input-group" >
						<span style="color: red"></span>
						<span style="color: red"></span>
						<input class="input--style-1"  type="text" name="Phone" id="Phone" placeholder="Phone Number">
					</div>

					<div class="input-group" >
						<span style="color: red"></span>
				 		<span style="color: red"></span>
						<input class="input--style-1"  type="email" name="Email" id="Email" placeholder="Email">
					</div>

					<div class="input-group" >
						<input class="input--style-1"  type="email" name="Email1" id="Email1" placeholder="Confirm Email">
					</div>

					<div class="input-group"  data-validate="Enter password">
						<span style="color: red"></span>
						<span style="color: red"></span>
						<input class="input--style-1" type="password" name="Pwd" id="Pwd" placeholder="Password">
					</div>

					<div class="input-group"  data-validate="Enter password">
						<input class="input--style-1" type="password" name="Pwd1" id="Pwd1" placeholder="Confirm Password">
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="Submit">
							Submit
						</button>
					</div>

					
				</form>
			</div>
		</div>
	</div>
    

</body>
</html>