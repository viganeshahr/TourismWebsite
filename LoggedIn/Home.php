<?php
include("../includes/Aconfig.php");
?>	


  <!DOCTYPE html>
	<html >
	<head>
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style1.css">

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<title>PixZeal Tourism</title>

			<link rel="stylesheet" href="css1/bootstrap.css">
													
			<!-- <link rel="stylesheet" href="css1/animate.min.css">				 -->
			<link rel="stylesheet" href="css1/main.css">
			<link rel="stylesheet" href="css/booking.css">
			
		</head>
		<body style="background: url('Images/Capture.jpg'); background-position: center;
  background-repeat: no-repeat;
  background-size: cover; ">	
			<header id="header" >

				
				<div class="container main-menu">
					<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				       
				      </div>
				      <nav id="nav-menu-container">
				        <ul >
		<li style="width: 230px">
			<a href="#">
				<div class="icon">
					<i class="fa fa-home" aria-hidden="true"></i>
					<i class="fa fa-home" aria-hidden="true"></i>
				</div>
				<div class="name"><span data-text="Home">Home</span></div>
			</a>
		</li>

		<li style="width: 230px">
			<a href="Destinations.php">
				<div class="icon">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<i class="fa fa-map-marker" aria-hidden="true"></i>
				</div>
				<div class="name"><span data-text="Destinations">Destinations</span></div>
			</a>
		</li>

		<li style="width: 230px">
			<a href="#" onclick="booking()">
				<div class="icon">
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<i class="fa fa-envelope" aria-hidden="true"></i>				
        </div>
				<div class="name"><span data-text="MyBookings">MyBookings</span></div>
			</a>
		</li>

		<li style="width: 230px">
			<a href="../Home.html">
				<div class="icon">
					<i class="fa fa-sign-in" aria-hidden="true"></i>
					<i class="fa fa-sign-in" aria-hidden="true"></i>
				</div>
				<div class="name"><span data-text="Log Out">Log Out</span></div>
			</a>
		</li>

		<li style="width: 230px">
      <a href="#Contact Us">
        <div class="icon">
          <i class="fa fa-commenting" aria-hidden="true"></i>
          <i class="fa fa-commenting" aria-hidden="true"></i>
        </div>
        <div class="name"><span data-text="Reviews">Reviews</span></div>
      </a>
    </li>
	</ul>
				      </nav><!-- #nav-menu-container -->					      		  
					</div>
				</div>
			</header>

			<section class="about-banner relative" >
				<div class="slideshow-container" style="width: 100%; ">

<div class="mySlides ">
  
  <img src="JogFalls.jpeg" style="width: 100%;
  height:700px;">
 
</div>

<div class="mySlides ">
  
  <img src="ManjarabadFort.jpg" style="width: 100%;
  height: 700px; ">

</div>

<div class="mySlides ">
  
  <img src="MysorePalace.jpg" style="width: 100%;
  height: 700px; ">
  
</div>
<div class="mySlides ">
  
  <img src="OmBeach.jpeg" style="width: 100%;
  height:700px; ">
  
</div>

<a class="prev" onclick="plusSlides(-1)"><i class="fa fa-arrow-left" style="color:white;" aria-hidden="true"></i></a>
<a class="next" onclick="plusSlides(1)"><i class="fa fa-arrow-right" style="color:white;"aria-hidden="true"></i></a>

</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  
  
  slides[slideIndex-1].style.display = "block";  
  
}

function booking() {
	// body...

// Get the modal
var modal = document.getElementById("MyBookings");

// Get the button that opens the modal
// var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 

  modal.style.display = "block";


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
}
</script>

			</section>







<div id="MyBookings" class="modal" >

  <!-- Modal content -->
  <div class="modal-content" style="background: url('Images/Wallpaper.jpg'); background-position: center;
  background-repeat: no-repeat;
  background-size: cover; ">
    <span class="close" style="color: black;">&times;</span>
    <p><h1><center>Your Previous Bookings with Us</center></h1>
      <br><br>
      <div class="col-sm-8" style="height: 300px">
                                <p class="text-primary" style="color: red;">
                                    
                                   <?php
                                    $file="../userlog.txt"; $un=strval(file_get_contents($file));
                                    $con = mysqli_connect("localhost", "root", "", "tourismwebsite");

                                    if(mysqli_connect_errno()) 
                                    {
                                    echo "Failed to connect: " . mysqli_connect_errno();
                                    }

                                    $sql = "SELECT * FROM `bookingdetails` WHERE `Username`='$un';";

                                    $resul = mysqli_query($con ,$sql);

                                    if(mysqli_num_rows($resul)>0)
                                    {
                                        
                          
              
                       ?> 
      <table border='2' style="margin-top: 20px;width: 100%; margin-left: 200px; ">
                      <tr style="color: white">
                      <td style="width: 200px"><h3 align="center"> Booking ID </h3>  </td>
                      <td style="width: 200px"><h3 align="center"> Date </h3></td>
                      <td style="width: 200px"><h3 align="center"> ID Proof </h3></td>
                      <td style="width: 200px"><h3 align="center"> Persons </h3></td>
                      <td style="width: 200px"><h3 align="center"> Amount Paid </h3></td>
                      
                      
                       </tr> <?php
                                        while ($row = mysqli_fetch_array($resul))
                                        { ?><tr style="color:black"><td align="center"><?php
                                            echo $row["Bookingid"]; ?>
                                           </td><td align="center"><?php 
                                            echo $row["Date"]; ?></td>
                                           <td align="center"> <?php echo $row["Idproof"];?></td>
                                          
                                          
                                          <td align="center"> <?php echo $row["Persons"];?></td>
                                          <td align="center"> <?php echo $row["Amtpaid"];?></td>
                                          
                                          <?php echo "<br>";

                                ?>
                                    </tr>      
                                <?php
                                        }
                                    }
                                    else
                                      echo "ERROR";
mysqli_free_result($resul);
mysqli_close($con);
                                ?>

                           
                       </table></p></div></p>
  </div>

</div>










<div style="height: 400px"><br><br>
  <div class="vl"><p class="state">KARNTAKA<sub>-One State Many Worlds.</sub></p><br>
<p class="description"><span>Amazing</span> Tours And Fun<br><br>Adventures <span>Waiting For <br><br>You</span> In Karnataka!!</p></div>

</div>
<div id="Experience Karnataka">
    <div id="sp" >
        <a href="#"><div class="contain">
          <img src="Images/Yakshagana.jpg" class="gal"/>
         <div class="overlay">
            <div class="text">Art <br><br><br> Forms</div>
          </div>
        </div></a>
       <a href="#"><div class="contain">
          <img src="Images/Heritage.jpg" class="gal"/>
         <div class="overlay">
            <div class="text">Experience<br><br><br>Heritage</div>
          </div> 
          </div></a>
        <a href="#"><div class="contain">  
        <img src="Images/Festival.jpg" class="gal"/>
         <div class="overlay">
            <div class="text">Experience<br><br><br>Festivals</div>
          </div> 
        </div></a>
        <a href="#"><div class="contain">
        <img src="Images/Spirituality.jpg" class="gal"/>
         <div class="overlay">
            <div class="text">Experience<br><br><br>Spirituality</div>
          </div> 
        </div></a>
        
        <a href="#"><div class="contain">
         <img src="Images/shivanasamudra.jpg" class="gal"/>
         <div class="overlay">
            <div class="text">Experience<br><br><br>Tranquility</div>
          </div> 
        </div></a>
        <a href="#"><div class="contain"><img src="Images/wildlife.jpg" class="gal"/>
         <div class="overlay">
            <div class="text">Experience<br><br><br>Wildlife</div>
          </div> 
        </div></a>
         <a href="#"><div class="contain"><img src="Images/beaches.jpg" class="gal"/>
         <div class="overlay">
            <div class="text">Experience<br><br><br>Beaches</div>
          </div> 
        </div></a>
        <a href="#"><div class="contain"><img src="Images/Cuisine.jpg" class="gal"/>
         <div class="overlay" >
            <div class="text" >Experience<br><br><br>Cuisines</div>
          </div>
        </div></a>
    </div>
  </div>

   <footer class="footer-area section-gap" style="margin-top: 20px;">
				<div class="container">

					<div id="Contact Us" class="row">
							<div class="col-md-4 bleft"  >
  <p ><h4 style="color: white"> About Us</h4>
    <b> PixZeal Tourism </b>
    <br>
    We currently don't own any static office <br> as we like to stay dynamic.
    <br>
    Situated in Bengaluru, India. 
  </p>  
  </div>
  <div class="col-md-4 bleft" >
    <p><h4 style="color: white">Contact Us</h4>
    <b>Phone:</b> +91966***92**<br>
      <b>Email:</b> support@pztourism.in</p>
  </div>
  <div class="col-md-4 bleft" >
    <p><h4 style="color: white">Reviews:</h4>
      
      <a href="../Reviews.html" style="color: gold"><b> 50 Reviews </b>
      <div class="icon">
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star-half-o" aria-hidden="true"></i>
              <i class="fa fa-star-o" aria-hidden="true"></i>
            </div></a>
    </p>
  </div> 				
					</div>

					<div class="row footer-bottom d-flex justify-content-between align-items-center">
						
					</div>
				</div>
			</footer>


		</body>
		</html>