<?php
include("../includes/Aconfig.php");
include("Booking.php"); 

?>
  <!DOCTYPE html>
  <html >
  <head>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style1.css">
        
      
        <link rel="stylesheet" href="css1/bootstrap.css">
                          
      <link rel="stylesheet" type="text/css" href="css/util.css">
      <link rel="stylesheet" type="text/css" href="css/main.css">    
      <link rel="stylesheet" href="css1/main.css">


    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    
    <!-- Site Title -->
    <title>Travel</title>

    
      <!--
      CSS
      ============================================= -->
      <link rel="stylesheet" href="css1/bootstrap.css">
                          
      <link rel="stylesheet" href="css1/animate.min.css">       
      <link rel="stylesheet" href="css1/main.css">
      


      <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);
  transition: 0.3s;
  width: 20%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.5);
}

.container {
  padding: 2px 16px;
}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(4, 9, 30, 0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
}
.modal-content1 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 30%;
}


/* The Close Button */
.close {
  color: red;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.close1 {
  color: red;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close1:hover,
.close1:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}


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
.btnn{
  display: inline-block;
  font-weight: 400;
  color: #212529;
  text-align: center;
  vertical-align: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
</style>
    </head>
    <body>  
      <header id="header" >

        
        <div class="container main-menu">
          <div class="row align-items-center justify-content-between d-flex">

              <nav id="nav-menu-container">
                <ul >
    <li style="width: 230px">
      <a href="Home.php">
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
      <a href="#" onclick="mybooking()">
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

    <li style="width: 200px">
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
        <div class="overlay1 overlay1-bg"></div>
        <div class="container">       
          <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
              <h1 class="text-white">
                Tour Packages       
              </h1> 
              <p class="text-white link-nav">  <span class="lnr lnr-arrow-right">Choose one among the below packages.</span> </p>
            </div>  
          </div>
        </div>
      </section>
 
 <section class="destinations-area section-gap">
        <div class="container" >
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-40 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Popular Destinations</h1>
                            <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day to.</p>
                        </div>
                    </div>
                </div>            
              <div class="row" style="padding-left:5%">
  <div class="col-md-4">
  <div class="card" style="width: 80%; margin-top:20px; align-content: center;">
    <a id="myBtn" class="btnn"><img src="Images/karnataka.jpg" alt="Avatar" style="width:100%; height:300px"></a>
        <div class="container">
            <h4><b>Pride Of South</b></h4> 
              <p>Embark on a luxurious voyage of discovery through Architecture, World Heritage Sites, Exquisite temples, Golden beaches & Wildlife Reserve</p> 
        </div>
  </div>
  </div>
  <div class="col-md-4">
  <div class="card" class="card" style="width: 80%; margin-top:20px; align-content: center;">
    <a id="myBtn1" class="btnn"><img src="Images/karnataka.jpg" alt="Avatar" style="width:100%; height:300px"></a>
        <div class="container">
            <h4><b>Gems of South</b></h4> 
              <p>A Journey Which allows you to experience Royalty, get in touch with nature and allows you to achieve inner peace.</p> 
        </div>
  </div>
  </div>
  <div class="col-md-4">
  <div class="card" class="card" style="width: 80%; margin-top:20px; align-content: center;">
    <a id="myBtn2" class="btnn"><img src="Images/karnataka.jpg" alt="Avatar" style="width:100%; height:300px"></a>
        <div class="container">
            <h4><b>Explore North</b></h4> 
              <p>Exploring the historic remains which echoes the rich culture and heritage of the Vijaynagara Dynasty.</p> 
        </div>
  </div>
  </div>
</div>
<div class="row" style="padding-left:5%">
  <div class="col-md-4">
  <div class="card" style="width: 80%; margin-top:20px; align-content: center;">
    <a id="myBtn3" class="btnn"><img src="Images/karnataka.jpg" alt="Avatar" style="width:100%; height:300px"></a>
        <div class="container">
            <h4><b>Coastal</b></h4> 
              <p>A journey witnessing the beautiful coastal line of Karnataka with clear blue skies and the mesmerizing sea.</p> 
        </div>
  </div>
  </div>
  <div class="col-md-4">
  <div class="card" class="card" style="width: 80%; margin-top:20px; align-content: center;">
    <a id="myBtn4" class="btnn"><img src="Images/karnataka.jpg" alt="Avatar" style="width:100%; height:300px"></a>
        <div class="container">
            <h4><b>Circuit</b></h4> 
              <p>Driving through the twists and turns of Western Ghats experiencing the cool fog and fresh air.</p> 
        </div>
  </div>
  </div>
  <div class="col-md-4">
  <div class="card" class="card" style="width: 80%; margin-top:20px; align-content: center;">
   <a id="myBtn5" class="btnn"> <img src="Images/karnataka.jpg" alt="Avatar" style="width:100%; height:300px"></a>
        <div class="container">
            <h4><b>Weekend Getaway</b></h4> 
              <p>A quick tour to the outskirts of Bangalore to buzz out from the stress of city life and indulge into the serenity of nature.</p> 
        </div>
  </div>
  </div>
</div>
        </div>  
      </section>


<script >
  function mybooking() {
  // body...

// Get the modal
var modalb = document.getElementById("MyBookings");

// Get the button that opens the modal
// var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var spanb = document.getElementById("bookingclose");
// When the user clicks the button, open the modal 

  modalb.style.display = "block";


// When the user clicks on <span> (x), close the modal
spanb.onclick = function() {
  modalb.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modalb) {
    modalb.style.display = "none";
  }
}
}
</script>
<div id="MyBookings" class="modal" >

  <!-- Modal content -->
  <div class="modal-content" style="background: url('Images/Wallpaper.jpg'); background-position: center;
  background-repeat: no-repeat;
  background-size: cover; ">
    <span class="close" id="bookingclose" style="color: black;">&times;</span>
    <p><h1><center>Your Previous Bookings with Us</center></h1>
      <br><br>
      <div  style="height: 300px;  width: 100%">
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
      <table border='2' style="margin-top: 20px;width: 100%;  ">
                      <tr style="color: white; ">
                      <td style="width: 900px"><h3 align="center"> Booking ID </h3>  </td>
                      <td style="width: 900px"><h3 align="center"> Date </h3></td>
                      <td style="width: 900px"><h3 align="center"> ID Proof </h3></td>
                      <td style="width: 900px"><h3 align="center"> Persons </h3></td>
                      <td style="width: 900px"><h3 align="center"> Amount Paid </h3></td>
                      
                      
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





<div id="myModal" class="modal">


  <!-- Modal content -->
  <div class="modal-content" >
    <span class="close" id="close">&times;</span>
    <h1 align="center" style="font-weight: 30px">PRIDE OF SOUTH</h1>
    <form>
              <ol>
                    <li class="d-flex justify-content-between ">
                      <span>Duration</span>
                      <span>7 days and 8 nights</span>
                    </li>
                    <li class="d-flex justify-content-between ">
                      <span>Next Journey Date</span>
                      <span>18.04.2018</span>
                    </li>
                    <li class="d-flex justify-content-between ">
                      <span>Departure From</span>
                      <span>Bengaluru</span>
                    </li>
                    <li class="d-flex justify-content-between ">
                      <span>Extras</span>
                      <span>All Inclusive</span>
                    </li>
                    <li class="d-flex justify-content-between ">
                      <span>Price per person</span>
                      <span>Rs <span id="price">150000</span>/-</span>
                    </li>                         
              </ol>
              <p><h3 align="center">Itinerary:</h3>
                 <h5>Night 1:</h5>
                 All Travelling Enthusiast are requested to Meet the Tour Guide and the team at Yeshwanthpur Railway Station. Your Journey comenses from here, you will board an overnight train to Mysore.Dinner will be served on the tain.<br>
                 <h5>Day 1 & Night 2:</h5>
                 Early Morning Breakfast will be served on board the train. After Brekfast a special bus will be in place to pick you up and show around Mysore Palace. In Mysore you'll visit World Famous Mysore Palace, Mysore Zoo. Post evening snacks and tea, a drive of 2 hoyrs to Kabini Forest.(Pack Your overnight clothes before-hand)<br>
                 <h5>Day 2 & Night 3:</h5>
                 Arrive at Kabini in Jungle Resort. Post brekfast a briefing of safari ride and the events of the day will be given at the lounge.You can choose from various activities available for you, any extra activities from the list will be charged extra.Night drive of 2 hours back to the train.Overnight Journey to Mangalore<br>
                 <h5>Day 3 & Night 4:</h5>
                 Train Departs from Mysore early morning towards Hassan.
                  Proceed for excursion (1.5 hrs one way) to Shravanabelagola village. Climb 700 steep steps, carved in a stone hillock to view 10th century built statue of Jain Monk Gommateshvara Bahubali an architectural marvel towering 58 feet high,Later, climb down the steep steps to board your bus standing at base of the hillock & drive back to Hassan Railway station to board the train by 1p.m. for lunch & brief rest.<br>
                  <h5>Day 4 & Night 5:</h5>
                  From Hassan Railway Station depart at 2.45 pm. for excursion (1.5 hrs one way) to view ancient Hindu temples at Halebedu & Belur. The 12th Century built Belur Temple is dedicated to Hindu God-Lord Vishnu & filled with intricate sculptures of elephants, lions, horses & sensuous dancers. The 12th Century built Halebidu temple complex is dedicated to Hindu God-Lord Shiva ,but were ransacked & looted by Muslim Invaders from north India in 14th Century. The outer walls of the temples contain intricate array of stone sculptures. Return back to Hassan Railway station by 7.15 p.m. for dinner & depart for Hospet.<br>
                  <h5> Day 5 & Night 6: </h5>
                  From Hospet Railway station at 8.30 a.m. proceed for excursion (30 minutes one way) to UNESCO World Heritage Site of Hampi Palace ruins. Located amongst awesome granite boulder-strewn landscape, Hampi was the capital of mighty South Indian Vijayanagar Empire in 14th Century-with opulent palaces, marvellous temples, massive fortifications, private baths for royalty, markets, pavilions & stables for Royal Elephants. The cityâ€™s merchants traded in diamonds, pearls, fine silks, brocades, horses & much more. Though ransacked by rulers from North India in 16th Century, ruins of these historical monuments have withstood the ravages of man & nature, to evoke memories of regal splendour. Return back to Hospet Railway Station by 1 p.m. to board the train for lunch & brief rest.<br>
                  <h5>Day 6 & Night 7:</h5> 
                    Morning Train further proceeds to Badami Railway Station.On reaching proceed for excursion to UNESCO World Heritage Sites of Badami caves & Pattadkal Temple Complex Carved out of sandstone hills, the 7th century built Badami Cave temples are dedicated to Hindu religious sects of Lord Shiva, Lord Vishnu & Budha and Jain Faiths. Highlight of the cave sculptures is a 18 armed Lord Shiva in Tandav dancing pose.

                    The Pattadakal Temple complex, built between 7th to 9th Century offers 10 temples built in fusion of various Indian Architectural Styles. There are numerous Kannada language inscriptions on the temple walls.

                    Return back to Badami Railway Station by 3.30 pm & depart for Gokarna, Dinner onboard.

                    Evening at leisure to enjoy the country side.<br>
                  <h5>Day 7 & Night 8:</h5>
                    Morning You'll be stationed at Gokarna, Breakfast will be served on board. From station you'll be taken to Yana Caves and return back by 1.30 for Lunch. Post lunch at leisure to enjoy the beaches at Gokarna and do local shopping.

                    Post 7.30 Dinner will be served on board and the train will depart to back to Bengaluru.You're journey will end at Yeshwanthpur railway station on Day 8 Morning 7am.
                    Goodies will be waiting for you at the railway station.<br><br>
                    <h5 align="center"><a id="bookingbtn" class="primary-btn text-uppercase">BOOK NOW</a></h5> 
                  </p>

    </form>
    <p></p>
  </div>

</div>

<script type="text/javascript">
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");


// Get the <span> element that closes the modal
var span = document.getElementById("close");

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
  
  //alert(pprice);   
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}


var booking = document.getElementById("Booking");

var bbtn = document.getElementById("bookingbtn");




var cls = document.getElementsByClassName("close1")[0];

bbtn.onclick = function () {
  booking.style.display = "block";
  var pprice = document.getElementById("price").innerHTML;
  document.getElementById("priceperperson").innerHTML = pprice;
  
}
cls.onclick = function() {
  booking.style.display = "none";
}
function calcCost()
{
  var persons = document.getElementById("PERSONS").value;
  var cost = document.getElementById("priceperperson").innerHTML;
  document.getElementById("COST").innerHTML = cost * persons;
}
 


</script>




<!-- CARD 2 -->
<div id="myModal1" class="modal">


  <!-- Modal content -->
  <div class="modal-content" >
    <span class="close" id="close1" >&times;</span>
    <h1 align="center" style="font-weight: 30px">GEMS OF SOUTH</h1>
    <form>
              <ol>
                    <li class="d-flex justify-content-between ">
                      <span>Duration</span>
                      <span>3 days and 4 nights</span>
                    </li>
                    <li class="d-flex justify-content-between ">
                      <span>Next Journey Date</span>
                      <span>10.05.2018</span>
                    </li>
                    <li class="d-flex justify-content-between ">
                      <span>Departure From</span>
                      <span>Bengaluru</span>
                    </li>
                    <li class="d-flex justify-content-between ">
                      <span>Extras</span>
                      <span>All Inclusive</span>
                    </li>
                    <li class="d-flex justify-content-between ">
                      <span>Price per person</span>
                      <span>Rs <span id="price1">50000</span>/-</span>
                    </li>                         
              </ol>
              <p><h3 align="center">Itinerary:</h3>
                 
                 
                  <h5>Night 1:</h5>
                  All Travelling Enthusiast are requested to Meet the Tour Guide and the team at Yeshwanthpur Railway Station. Your Journey comenses from here, you will board an overnight train to Mysore.Dinner will be served on the tain.<br>
                  <h5> Day 1 & Night 2: </h5>
                  An early morning visit to the great Chamundi hills, which is a climb of 1000 steps to witness the divine mahamangalarati of the mighty Goddess Chamundi. Return back to the hotel to freshen up and have breakfast. Vist the beautiful St. Philomena's Church. Have lunch at a hotel nearby and then head to the beautiful Mysore Palace and witness its rich culture. Checkout from the hotel and head to the KRS dam to witness the beautiful musical fountain and also witness the esmering Mysore Palace with its lights up. Return back to the hotel and rest for the night. <br>
                  <h5>Day 2 & Night 3:</h5> 
                    Early morning departure to coorg. Visit The Tibetian's colony at Nisargadhama on the way and explore the Golden Temple. Breakfast at aa hotel nearby. Visit the Dubare Elephant Camp and enjoy the thrilling river rafting and company of the mighty elephants and leave to Coorg. On arriving at Coorg freshen up at the hotel have lunch and head to the Abey Falls in a bus arranged. Head to Raja's Seat to watch the blissful sunset in peace. Head back to the hotel and have dinner and rest for the night.
                    <br>
                  <h5>Day 3 & Night 4:</h5>
                    Have breakfast early morning  and head for a trek to Mandalpatti to enjoy the scenic view and fresh air filled with mist. Return back to the hotel to have lunch and freshen up. Visit the madikeri fort where all can do some shopping. Visit the Omkareshwar Temple and return back to the hotel to pack all belongings and check out from the hotel. Board an overnight bus to Bangalore. <br><br>
                    <h5 align="center"><a id="bookingbtn1" class="primary-btn text-uppercase">BOOK NOW</a></h5> 
                  </p>

    </form>
    <p></p>
  </div>

</div>

 

<script type="text/javascript">
// Get the modal
var btn1 = document.getElementById("myBtn1");
var modal1 = document.getElementById("myModal1");

// Get the button that opens the modal


// Get the <span> element that closes the modal
var span1 = document.getElementById("close1");

// When the user clicks the button, open the modal 
btn1.onclick = function() {
  modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
  modal1.style.display = "none";
}


var bbtn1 = document.getElementById("bookingbtn1");
var booking = document.getElementById("Booking");



var cls = document.getElementsByClassName("close1")[0];

bbtn1.onclick = function () {
  booking.style.display = "block";
  var pprice = document.getElementById("price1").innerHTML;
  document.getElementById("priceperperson").innerHTML = pprice;
}
cls.onclick = function() {
  booking.style.display = "none";
}


</script>
  




<!--CARD 3 -->
<div id="myModal2" class="modal">


  <!-- Modal content -->
  <div class="modal-content" >
    <span class="close" id="close2" >&times;</span>
    <h1 align="center" style="font-weight: 30px">EXPLORE NORTH</h1>
    <form>
              <ol>
                    <li class="d-flex justify-content-between ">
                      <span>Duration</span>
                      <span>5 days and 6 nights</span>
                    </li>
                    <li class="d-flex justify-content-between ">
                      <span>Next Journey Date</span>
                      <span>15.06.2018</span>
                    </li>
                    <li class="d-flex justify-content-between ">
                      <span>Departure From</span>
                      <span>Bengaluru</span>
                    </li>
                    <li class="d-flex justify-content-between ">
                      <span>Extras</span>
                      <span>All Inclusive</span>
                    </li>
                    <li class="d-flex justify-content-between ">
                      <span>Price per person</span>
                      <span>Rs <span id="price2">120000</span>/-</span>
                    </li>                         
              </ol>
              <p><h3 align="center">Itinerary:</h3>
                 
                  <h5>Night 1: </h5>
                  Board an overnight train from Bangalore to Hospet. Dinner will be served in the train.
                  <h5> Day 1 & Night 2: </h5>
                  On arriving Hospet, a bus will be arranged to take us to the hotel. Rest, bath and have breakfast after which we will depart to  Hampi where we will visit Virupaksha Temple, Kadale Kalu Ganesha, Sasive Kalu Ganesha, Krishna Temple, Lakshmi Narasimha, Badavi Linga, Sister Stones, Underground Temple, Mint House, Lotus Mahal, Elephant Stables, Hazara Rama Temple, Palace Area, Mahanavami Dibba, Queen's Bath). Lunch will be at Karnataka Hotels Hampi and Visit Vijaya Vittala Temple (Stone Chariot), King's Balance, Purandara Mantapa, Old Bridge Pillars, Vijaya Vittala Temple. Visit Tungabhadra Dam Garden & Musical Fountain in the evening and return back to the hotel to rest for the night.<br>
                  <h5>Day 2 & Night 2:</h5> 
                    Departure to Badami.Breakfast at Kushtagi and then visit Banashankari Temple and Badami Cave Temples . Lunch will be at Karnataka Hotels Badami . Visit Mahakuteshwara Temple, Mahakuta , Pattadakal Mallikarjuna, Virupaksha & other temples , Aihole Durgadagudi & other temples and Arrive at Bijapur & halt for the night.

                    <br>
                  <h5>Day 3 & Night 4:</h5>
                    Visit Gol Gumbaz, Jamia Masjid, Ibrahim Roza, Big Cannon, Upari Burj, Bara Kaman. Lunch will be at Almatti .Visit Kudalasangameshwara Temple & Basavanna Samadi , Anubhava Mantapa. Have dinner and depart to Dandeli by boarding an overnight bus.</br></br>
                    <h5>Day 4 & Night 5:</h5>
                    On arriving Dandeli, relax at the hotel and freshen up. Have breakfast and leave for experiencing river rafting at the Kali river. Also enjoy various other water sports. Return back to the hotel to have lunch and then visit  the Dandeli Wildlife Santuary. Return back to the hotel have dinner and halt for the night.<br><br>
                    <h5>Day 5 & Night 6:</h5>
                    Have breakfast at the hotel and leave for a trk to the Syntheri rocks. Return back to the hotel and have lunch and pack all belongings and depart back to Bangalore by boarding a bus.
                    <h5 align="center"><a id="bookingbtn2" class="primary-btn text-uppercase">BOOK NOW</a></h5> 
                  </p>

    </form>
    <p></p>
  </div>

</div>  


  
<script type="text/javascript">
// Get the modal
var modal2 = document.getElementById("myModal2");

// Get the button that opens the modal
var btn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span2 = document.getElementById("close2");

// When the user clicks the button, open the modal 
btn2.onclick = function() {
  modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
  modal2.style.display = "none";
}



var booking = document.getElementById("Booking");

var bbtn2 = document.getElementById("bookingbtn2");

var cls = document.getElementsByClassName("close1")[0];

bbtn2.onclick = function () {
  booking.style.display = "block";
  var pprice = document.getElementById("price2").innerHTML;
  document.getElementById("priceperperson").innerHTML = pprice;
  
}
cls.onclick = function() {
  booking.style.display = "none";
}


</script>

<!-- CARD 4 -->
<div id="myModal3" class="modal">


  <!-- Modal content -->
  <div class="modal-content" >
    <span class="close" id="close3" >&times;</span>
    <h1 align="center" style="font-weight: 30px">COASTAL</h1>
    <form>
              <ol>
                    <li class="d-flex justify-content-between ">
                      <span>Duration</span>
                      <span>8 days and 9 nights</span>
                    </li>
                    <li class="d-flex justify-content-between ">
                      <span>Next Journey Date</span>
                      <span>1.06.2018</span>
                    </li>
                    <li class="d-flex justify-content-between ">
                      <span>Departure From</span>
                      <span>Bengaluru</span>
                    </li>
                    <li class="d-flex justify-content-between ">
                      <span>Extras</span>
                      <span>All Inclusive</span>
                    </li>
                    <li class="d-flex justify-content-between ">
                      <span>Price per person</span>
                      <span>Rs <span id="price3">100000</span>/-</span>
                    </li>                         
              </ol>
              <p><h3 align="center">Itinerary:</h3>
                  <h5>Night 1:</h5>
                    Board an overnight train from Bangalore to Mangalore. Dinner will be served in the train.<br>
                  <h5>Day 1 & Night 2:</h5> 
                    On arriving Mangalore check-into the hotel. Relax and later proceed to visit Beaches, boating, light house etc.<br>
                  <h5>Day 2 & Night 3:</h5>
                    You'll be taken to Kasargod(Karnatka-Kerala border).Visit Bikal Fort(which is situated beside the sea).
                    You'll be taken to Udupi by evening post which you'll be taken to Shri Krishna Temple.<br>
                    <h5>Day 3 & Night 4:</h5>
                    Post breakfast you'll be taken to Maravanthe Beach(A scienic view of Beach and Backwaters).Reach Murudeshwar and check-in at resort.<br>
                    <h5>Day 4 & Night 5:</h5>
                    Murudeshwar & boat ride to island along with water sports(Excluded).<br>
                    <h5>Day 5 & Night 6:</h5>
                    Morning breakfast, check out and proceed to Gokarna.On the way you'll visit Yana Caves. check-in at Gokarna and visit Om Beach to expeirence a Beautiful Sunrise.<br>
                    <h5>Day 7 & Night 8:</h5>
                    Post Breakfast A beach trek will be organised. People who do not wish to go can relax and ease in whole day. Evening you'' proceed to Karwar and check-in at hotel.<br>
                    <h5>Day 8 & Night 9:</h5>
                     KARWAR:Escape from the world to this paradise heaven on earth that will touch your soul. Sight Seeing / Relaxing whole day. Evening 7.30pm you'll board a train back to Bengaluru(Dinner Served on Train).<br>
                    <h5 align="center"><a id="bookingbtn3" class="primary-btn text-uppercase">BOOK NOW</a></h5> 
                  </p>

    </form>
    <p></p>
  </div>

</div>  

  
<script type="text/javascript">
// Get the modal
var modal3 = document.getElementById("myModal3");

// Get the button that opens the modal
var btn3 = document.getElementById("myBtn3");

// Get the <span> element that closes the modal
var span3 = document.getElementById("close3");

// When the user clicks the button, open the modal 
btn3.onclick = function() {
  modal3.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span3.onclick = function() {
  modal3.style.display = "none";
}



var booking = document.getElementById("Booking");

var bbtn3 = document.getElementById("bookingbtn3");

var cls = document.getElementsByClassName("close1")[0];

bbtn3.onclick = function () {
  booking.style.display = "block";
  var pprice = document.getElementById("price3").innerHTML;
  document.getElementById("priceperperson").innerHTML = pprice;
  
}
cls.onclick = function() {
  booking.style.display = "none";
}


</script>


<!-- CARD 5 -->
<div id="myModal4" class="modal">


  <!-- Modal content -->
  <div class="modal-content" >
    <span class="close" id="close4" >&times;</span>
    <h1 align="center" style="font-weight: 30px">CIRCUIT</h1>
    <form>
      <!-- Bengaluru -> Shravanabelagola -> Chikmagalur -> Shivmogga -> Sirsi -> Jog Falls -> Agumbe -> Kudremukh -> Dharmasthala -> Bisle -> Shettihalli -> Srirangapatna -> Bengaluru -->
              <ol>
                    <li class="d-flex justify-content-between ">
                      <span>Duration</span>
                      <span>6 Days and 5 Nights</span>
                    </li>
                    <li class="d-flex justify-content-between ">
                      <span>Next Journey Date</span>
                      <span>21.04.2018</span>
                    </li>
                    <li class="d-flex justify-content-between ">
                      <span>Departure From</span>
                      <span>Bengaluru</span>
                    </li>
                    <li class="d-flex justify-content-between ">
                      <span>Extras</span>
                      <span>All Inclusive</span>
                    </li>
                    <li class="d-flex justify-content-between ">
                      <span>Price per person</span>
                      <span>Rs <span id="price4">50000</span>/-</span>
                    </li>                         
              </ol>
              <p><h3 align="center">Itinerary:</h3>
                    <h5>Day 1 & Night 1:</h5>
                    Morning 9.30 Bus Will Depart to Shravanabelagola visitors can board the bus at Available locations (Breakfast is not included).Lunch will be served, reach Shravanabelagola visit the place and be back before 4.30. Post evening High Tea you'll be taken to Chikkmagalur(Dinner will be served at hotel).<br>
                    <h5>Day 2 & Night 2:</h5>
                    Post breakfast you'll be briefed about day's event.<br>
                    <h5>Day 3 & Night 3:</h5>
                    Post breakfast you'll further proceed to Shivmogga to visit Jog and other places. You'll stay in a private resort near Jog.<br>
                    <h5>Day 4 & Night 4:</h5>
                    Post breakfast you'll be further taken to Kudremukh National Park(UNESCO PROTECTED).From there You'll be taken to Dharmasthala/Kukke.<br>
                    <h5>Day 5 & Night 5:</h5>
                    You'll board a train to experience the Western Ghats Of India thorough Indian Railways. You'll get down at sakleshpur where your bus will be waiting fo you already.From here you'll be taken to Manjarabad Fort. Stay At Jungle resort and ease.<br>
                    <h5>Day 6:</h5>
                    Post breakfast you'll proceed back for Bengaluru, on way you'll visit Shetihalli Church(An ancient abandoned church)
                    and sight seeing around Hassan. Evening 6 you'll reach Bengaluru and be dropped off from picked up locations.<br>
                    <h5 align="center"><a id="bookingbtn4" class="primary-btn text-uppercase">BOOK NOW</a></h5> 
                  </p>

    </form>
    <p></p>
  </div>

</div> 



<script type="text/javascript">
// Get the modal
var modal4 = document.getElementById("myModal4");

// Get the button that opens the modal
var btn4 = document.getElementById("myBtn4");

// Get the <span> element that closes the modal
var span4 = document.getElementById("close4");

// When the user clicks the button, open the modal 
btn4.onclick = function() {
  modal4.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span4.onclick = function() {
  modal4.style.display = "none";
}



var booking = document.getElementById("Booking");

var bbtn4 = document.getElementById("bookingbtn4");

var cls = document.getElementsByClassName("close1")[0];

bbtn4.onclick = function () {
  booking.style.display = "block";
  var pprice = document.getElementById("price4").innerHTML;
  document.getElementById("priceperperson").innerHTML = pprice;
  
}
cls.onclick = function() {
  booking.style.display = "none";
}


</script>
<!-- CARD 6 -->
<div id="myModal5" class="modal">


  <!-- Modal content -->
  <div class="modal-content" >
    <span class="close" id="close5" >&times;</span>
    <h1 align="center" style="font-weight: 30px">WEEKEND GETAWAY</h1>
    <form>
              <ol>
                    <li class="d-flex justify-content-between ">
                      <span>Duration</span>
                      <span>2 days and 3 nights</span>
                    </li>
                    <li class="d-flex justify-content-between ">
                      <span>Next Journey Date</span>
                      <span>18.04.2018</span>
                    </li>
                    <li class="d-flex justify-content-between ">
                      <span>Departure From</span>
                      <span>Bengaluru</span>
                    </li>
                    <li class="d-flex justify-content-between ">
                      <span>Extras</span>
                      <span>All Inclusive</span>
                    </li>
                    <li class="d-flex justify-content-between ">
                      <span>Price per person</span>
                      <span>Rs <span id="price5">30000</span>/-</span>
                    </li>                         
              </ol>
              <p><h3 align="center">Itinerary:</h3>
                 
                  <h5> Night 1:</h5> 
                      Departure from Bangalore. Overnight Journey to Bisle Ghats. All of you will be expected to meet at Sankey Ghats on time, from where we will be heading on your way towards Bisle Ghat at 0900PM. The journey will take around 4 hours; expect to reach Bisle Ghats by around 0100-0130AM.<br><br>
                    <h5>Day 1 & Night 2:</h5> 
                      As the day rises; at around 0800AM, you will be pedalling your way to the beautiful passes of Bisle Ghats. Entering the ghats through Sakleshpur, you will begin a thrilling downward descent passing through picturesque hamlets and fertile fields. On the way and before entering the Bisle village, admire the gorgeous vistas of the Giri River, Kumara Parvatha Puspha Giri and Dodda Betta from a view point; retire for the night in a local hotel in Kukke Subramanya.<br><br>
                    <h5>Day 2 & Night 3:</h5> 
                      Pick up your faithful bicycles and start the day at around 0800 AM from Kukke Subramanya. The trail passes through picturesque trails the way is moderately challenging. Feel the thrill in your veins as you navigate the slopes and gradual climbs passing through lush, green forests! The trail concludes at Markanja at around 0200PM. Thereafter, you will be departing by cars to Bangalore, marking the end of this cycling getaway at Bisle Ghats<br><br>
                <br><br>
                    <h5 align="center"><a id="bookingbtn5" class="primary-btn text-uppercase">BOOK NOW</a></h5> 
                  </p>

    </form>
    <p></p>
  </div>

</div> 

<div class="modal" id="Booking" >
  <div class="modal-content1" style="background-color:rgba(26,26,26,.95);">
  <span class="close1">&times;</span>
  <h1 align="center" style="font-weight: 30px; color: white">BOOKING DETAILS</h1>
  <form class="login100-form validate-form" method="POST" action="Destinations.php">
    
          <div class="input-group" >
            <span style="color: red"></span>
            <input class="input--style-1"  type="text" name="NAME" id="NAME" placeholder="Enter Your Name">
          </div>
          <div class="input-group" >
            <span style="color: red"></span>
            <input class="input--style-1"  type="text" name="EMAIL" id="EMAIL" placeholder="Enter Your Email">
          </div>
          <div class="input-group" >
            <span style="color: red"></span>
            <input class="input--style-1"  type="text" name="USERNAME" id="USERNAME" placeholder="Enter Your Username">
          </div>
          <div class="input-group" >
            <span style="color: red"></span>
            <input class="input--style-1"  type="password" name="PASSWORD" id="PASSWORD" placeholder="Enter Your Password">
          </div>
          <div class="input-group" >
            <span style="color: red"></span>
            <input class="input--style-1"  type="text" name="PERSONS" id="PERSONS" placeholder="Enter No Of Persons" onkeyup="calcCost()">
          </div>
          <div class="input-group" >
            <span style="color: red"></span>
            <input class="input--style-1"  type="text" name="IDPROOF" id="IDPROOF" placeholder="Enter Your DL / AADHAR / PASSPORT Number">
          </div>
          
          <div style="color: white;">
            Cost Per Person: <span id="priceperperson"></span>
          </div>
          <div style="color: white;">
            Total Cost Of Your Trip Is:
            <span style="color: red"></span>
            <span class="input--style-1" name="Cost" id="COST"></span>
          </div>
          <br>
          <input id="bookingbtn" type="submit" class="primary-btn text-uppercase" style="color: black" name="submit" value="submit"  >
    
  </form>
  </div>
</div>


<script type="text/javascript">
// Get the modal
var modal5 = document.getElementById("myModal5");

// Get the button that opens the modal
var btn5 = document.getElementById("myBtn5");

// Get the <span> element that closes the modal
var span5 = document.getElementById("close5");

// When the user clicks the button, open the modal 
btn5.onclick = function() {
  modal5.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span5.onclick = function() {
  modal5.style.display = "none";
}



var booking = document.getElementById("Booking");

var bbtn5 = document.getElementById("bookingbtn5");

var cls = document.getElementsByClassName("close1")[0];

bbtn5.onclick = function () {
  booking.style.display = "block";
  var pprice = document.getElementById("price5").innerHTML;
  document.getElementById("priceperperson").innerHTML = pprice;
  
}
cls.onclick = function() {
  booking.style.display = "none";
}

</script>
   <footer class="footer-area section-gap">
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

