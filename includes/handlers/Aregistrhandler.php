  <?php
  

if (isset($_POST['Submit'])) {
	# code... this is for registration 

	//echo "<br> Create WORKED <br>";
	$Username =$_POST['Username'];
	// echo $Username;
  $Name = $_POST['Name'];
  // echo $Name;
  $Birthday = $_POST['Birthday'];
  // echo $Birthday;
  $Gender = $_POST['Gender'];
  // echo $Gender;
  $Phone = $_POST['Phone'];
  // echo $Phone;
  $Email = $_POST['Email'];
  // echo $Email;
  $Pwd = $_POST['Pwd'];
  // echo $Pwd;
                                     
   //echo $Authentication; 
  $wassuccessful= $account->register($Username,$Name,$Birthday,$Gender,$Phone,$Email,$Pwd);
  
  if(($wassuccessful == true))
  {
    //header("Location:Login.php");
  }
  
 }

?> 