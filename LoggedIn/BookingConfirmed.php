<!DOCTYPE html>
<html>
<head>
  <title>Booking Confirmed</title>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <script src="https://smtpjs.com/v3/smtp.js"></script>
  <script type="text/javascript">
   
      var mail = "<?php $file="count.txt"; $count=strval(file_get_contents($file)); echo $count ?> ";
      var texts =mail.split(' ');
      
      //alert(mail);
      // alert(name+" "+message);
      Email.send({ Host : "smtp.gmail.com",
    SecureToken : "" ,// place your SMTP SECURE TOKEN HERE
      Username : "", //YOUR EMAIL ID
      Password : "", //YOUR SMTP EMAILID PWD 
      To : texts[0],
      From : "14vishalganesh98@gmail.com",
      Subject : "This is the subject",
      Body : "<p style='color:red'>THIS IS AN COMPUTER GENERATED MAIL. DO NOT REPLY BACK.</p><br> <br><H1>Greetings From PixZeal Tourism </h1><br><h2>PIXZEAL TOURISM CONFIRMS YOUR BOOKING!</h2><br><br><h4> Your Respective Booking Id is:"+texts[1]
}).then(
  message => alert(message)
);
    
  </script>
</head>
<body>
<body style="background: url(Images/ManjarabadFort1.jpg) no-repeat no-repeat center;">
  
  <div class="limiter">
    <div class="container-login100" >
      <div class="wrap-login100">
        <form class="login100-form validate-form" method="POST" action="Login.php">
          <span class="login100-form-logo">
            <!-- <i class="fa fa-check-circle-o" aria-hidden="true" ></i> -->
            <i class="fa fa-check" aria-hidden="true"></i>
          </span>

          <span class="login100-form-title p-b-34 p-t-27" id="title">
           BOOKING CONFIRMED
          </span>

          <div class="d" style="color: white" >
            <script type="text/javascript" > 
            var mail = "<?php $file="count.txt"; $count=strval(file_get_contents($file)); echo $count ?> ";
            var texts =mail.split(' ');

            document.write("Booking Id is: "+texts[1]);
            document.write("<br><br> A confirmation Mail has been sent to "+texts[0]);
          </script>
            
          </div>
          <div id="errorusername">
            <span style="color: red"></span> </div>
          <br>
          <div style="color: white" >
            Thank You For Choosing Us!
          </div>
          <div id="errorpassword">
            <span style="color: red"></span> </div>
     <div id="loginfailed">
            <span style="color: red"></span> </div>
          <br>
          <div class="container-login100-form-btn">
            <a class="login100-form-btn" href="Home.php" type="submit" name="Log" id="login">
             Home
            </a>
          </div>

          <div class="text-center p-t-30">
            
             
            </div>

          </div>



        </form>
      </div>
    </div>
  </div>
  
  </body>
</body>
</html>

