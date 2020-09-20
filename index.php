<!DOCTYPE html>
<html lang="en">
<head><title>CITA</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">



<!-- for title icon -->
<link rel="shortcut icon" type="image/x-icon" href="images/virus.png">

<!-- CSS code -->
<link rel="stylesheet" href="css/customerpage.css">


</head>
<body>


<!-- Navbar -->
<div class="top">
  <div class="bar black card">
    <a class="bar-item button padding-large hide-medium hide-large right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="bar-item button padding-large">HOME</a>
    <a href="#band" class="bar-item button padding-large hide-small">ABOUT</a>
    <a href="#tour" class="bar-item button padding-large hide-small">EVENTS</a>
    <a href="admin/" class="bar-item button padding-large hide-small">LOGIN</a>
        <a href="javascript:void(0)" class="padding-large hover-red hide-small right"><i class="fa fa-search"></i></a>
  </div>
</div>
</div>
    </div>




    



<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="bar-block black hide hide-large hide-medium top" style="margin-top:46px">
  <a href="#band" class="bar-item button padding-large" onclick="myFunction()">ABOUT</a>
  <a href="#tour" class="bar-item button padding-large" onclick="myFunction()">EVENTS</a>
</div>



<!-- Page content -->
<div class="content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides display-container center">
    <img src="images/slideshow11.jpg" width="1500" height="700">
    <div class="display-bottommiddle container text-white padding-32 hide-small">
      <h3>Los Angeles</h3>
    </div>
  </div>
  <div class="mySlides display-container center">
  <img src="images/slideshow2.jpg" width="1500" height="700">
    <div class="display-bottommiddle container text-white padding-32 hide-small">
      <h3>Malaysia</h3>
    </div>
  </div>
  <div class="mySlides display-container center">
  <img src="images/slideshow3.jpg" width="1500" height="700">
    <div class="display-bottommiddle container text-white padding-32 hide-small">
      <h3>Melbourne</h3>  
    </div>
  </div>
  <div class="mySlides display-container center">
  <img src="images/slideshow4.jpg" width="1500" height="700">
    <div class="display-bottommiddle container text-white padding-32 hide-small">
      <h3>Sydney</h3>
    </div>
  </div>



  <!-- The Band Section -->
  <div class="container content center padding-64" style="max-width:800px" id="band">
    <h2 class="wide">ABOUT</h2>
    <p class="opacity"><i>CITA Event Management Company</i></p>
    <p class="justify"> The project is to make Event Management Software for The International Conference on 
      IT in Asia (CITA). The International Conference on IT in Asia (CITA) is a regular series of biennial conferences 
      being held for the purpose of bringing together researchers and professionals to share and exchange ideas and 
      information pertaining the roles of ICTs within the prevailing challenges of development faced by this region. 
      The main purpose of this software is to organize the conference booking, payment, marketing, update with event progress, 
      and integrating with social media. This helps our client to make good control of the conference. With the help of this 
      software, CITA can be aware of the expenditure of the conference, collect the database of the researchers and 
      professionals, create awareness of the problems, and solution related to the IT business. 
     

  </div>



  <!-- The Events Section -->
  <div class="black" id="tour">
    <div class="container content padding-64" style="max-width:800px">
      <h2 class="wide center">EVENTS</h2>
      <p class="opacity center"><i>Due to COVID-19 we are temporarily closed.</i></p><br>

      <ul class="ul border white text-grey">
        <li class="padding">September <span class="tag red margin-left">Sold out</span></li>
        <li class="padding">October <span class="tag red margin-left">Sold out</span></li>
        <li class="padding">November <span class="badge right margin-right">3</span></li>
      </ul>

      <div class="row-padding padding-32" style="margin:0 -16px">
        <div class="third margin-bottom">
          <img src="images/eventsy.jpg" alt="New York" style="width:100%" class="hover-opacity">
          <div class="container white">
            <p><b>New York</b></p>
            <p class="opacity">Fri 27 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="button black margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
        <div class="third margin-bottom">
          <img src="images/eventny.jpg" alt="Paris" style="width:100%" class="hover-opacity">
          <div class="container white">
            <p><b>Paris</b></p>
            <p class="opacity">Sat 28 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="button black margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
        <div class="third margin-bottom">
          <img src="images/eventsf.jpg" alt="Paris" style="width:100%" class="hover-opacity">
          <div class="container white">
            <p><b>Melbourne</b></p>
            <p class="opacity">Sat 28 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="button black margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Ticket Modal -->
  <div id="ticketModal" class="modal">
    <div class="modal-content animate-top card-4">
      <header class="container teal center padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="button teal xlarge display-topright">×</span>
        <h2 class="wide"><i class="fa fa-suitcase margin-right"></i>Tickets</h2>
      </header>
      <div class="container">
        <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
        <input class="input border" type="text" placeholder="How many?">
        <p><label><i class="fa fa-user"></i> Send To</label></p>
        <input class="input border" type="text" placeholder="Enter email">
        <button class="button block teal padding-16 section right">PAY <i class="fa fa-check"></i></button>
        <button class="button red section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="right">Need <a href="#" class="text-blue">help?</a></p>
      </div>
    </div>
  </div>




<!-- Footer -->
<footer class="container padding-64 center opacity light-grey xlarge">
  <p class="medium">Powered by CITA</a></p>
</footer>


<!-- JS code from js folder -->
<script src="js/frontpage.js"></script>
</body>
</html>
