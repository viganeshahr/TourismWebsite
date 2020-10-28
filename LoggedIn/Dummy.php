<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://smtpjs.com/v3/smtp.js"></script>
	<script type="text/javascript">
		 
      
      var mail ="<?php $file="count.txt"; $count=strval(file_get_contents($file)); echo $count ?>";
     // alert(mail);
      // alert(name+" "+message);
      Email.send({ Host : "smtp.gmail.com",
    SecureToken : "4cc623a7-95eb-40c8-9274-7f8b236b77c0",
      Username : "14vishalganesh98@gmail.com",
      Password : "#09ViGaneShA25*",
      To : mail,
      From : "14vishalganesh98@gmail.com",
      Subject : "This is the subject",
      Body : "THIS IS AN COMPUTER GENERATED MAIL. DO NOT REPLY BACK. PIXZEAL TOURISM CONFIRMS YOUR BOOKING!"
}).then(

  message => if(message)
  {
     redirect();
  }

);

function redirect() {
	// body...
	window.location.href="http://localhost/WTA/Home.html";
}

	</script>
</head>

</html>