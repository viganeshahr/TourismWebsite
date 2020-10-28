<?php

if(isset($_POST['submit']))
{   //echo "IN";
    $bbid = uniqid();
	$Name = $_POST['NAME'];
	// echo $Name;
	$Email = $_POST['EMAIL'];
	// echo $Email;
	$Username = $_POST['USERNAME'];
	// echo $Username;
	$Password = $_POST['PASSWORD'];
	// echo $Password;
	$Persons = $_POST['PERSONS'];
	// echo $Persons;
	$IdProof = $_POST['IDPROOF'];
	// echo $IdProof;
    $file = "count.txt";
    $Contents = $Email." ".$bbid;
    file_put_contents($file,$Contents);
     
	header("Location:BookingConfirmed.php");
}

?>