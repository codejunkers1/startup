<!DOCTYPE html>
<html>
<title>Beginners World</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("bg_2.jpg");
    min-height: 100%;


}

.w3-bar .w3-button {
    padding: 16px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card-2" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide"><img src="logo2.png" style="width:150px;height:50px;"></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
    <a href="newidea.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> START A BUSINESS</a>
      <a href="#about" class="w3-bar-item w3-button"><i class="fa fa-book"></i> ABOUT</a>
      <a href="#overview" class="w3-bar-item w3-button"><i class="fa fa-search"></i> OVERVIEW</a>
      <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
      
     <a href="login.php" class="w3-bar-item w3-button"><i class="fa fa-sign-in"></i> LOGIN</a>
      <a href="signup.php" class="w3-bar-item w3-button"><i class="fa fa-sign-in"></i> SIGNUP</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card-2 w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#overview" onclick="w3_close()" class="w3-bar-item w3-button">OVERVIEW</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-middle w3-text-dark-gray" style="padding:60px">
    <span class="w3-xxxlarge w3-hide-small">FOSTERING <br>THE INNOVATIVE ENTREPRENEURS</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Start something that matters</span><br>
    <span class="w3-large">Stop wasting valuable time with projects that just isn't you.</span>
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Start a Virtual Tour</a></p>
  </div> 
  
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px;background-color: #b1d0f9" id="about">
  <h3 class="w3-center">ABOUT</h3>
  <p class="w3-center w3-large">Key features of our firm</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-line-chart w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Market</p>
      <p>We provide the pre-market research for an idea of the entrepreneurs,such that they will be having a vision about their business before they get started </p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-inr w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Investment</p>
      <p>The entrepreneurs will be able to captivate the angel investors through our gateway by </p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart-o w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Incubation</p>
      <p>Deep engagement with our firm partners and domain experts over a period of time of raise.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Support</p>
      <p>All the brand-new Startups are provided with all the services required for their growth through all their life-cycle. </p>
    </div>
  </div>
</div>





<div class="w3-container" style="padding:128px 16px" id="overview">

  <h3 class="w3-center">OVERVIEW</h3>

<style type="text/css">
	#tabwhat,#tabwhy,#tabhow {
		color: black;
		border: 2px solid grey;
		padding: 9px;
		border-bottom: none;
		width: 500px;
		cursor: pointer;
		padding-right: 200px;
		padding-left: 150px;

	}
	a:visited {
    color: green;
}
</style>
<div align="center" class="tab" width=100%>
  <span id="tabwhat" onclick="openCity(event, 'What')">What</span>
  <span id="tabwhy" onclick="openCity(event, 'Why')">Why</span>
  <span id="tabhow" onclick="openCity(event, 'How')">How</span>
</div>
<hr style="color: grey;">

<div id="What" class="tabcontent">
  <br>
<br>
  <p>*  Beginners World helps entrepreneurs turn ideas into viable businesses. </p>
<p>*  We accelerate in an ideal way of engaging with us � providing you a structured mechanism of learning, networking, 
scaling-up and raising capital. </p>
<p>*  We run sector-agnostic, regional and sector-specific accelerators.</p>
<p>*  Beginners world supports early-stage, and growth-oriented businesses in a range of sectors, including engineering,    computational and life sciences and the development for environmentally friendly, walkable neighborhoods where people can live and work.</p>
<p>*  With firm belief that the today startups have the potential to concoct the biggest of 'the' next things, we are here to bring about a change. 
<p>*  Apart from aiming to be the biggest source of all valuable and relevant information to entrepreneurs and business enthusiasts, 
we strive to transform and boost the start-up ecosystem in the country.

</div>
<style type="text/css">
	#Why{
		display: none;
	}
	#How{
		display: none;
	}
</style>
<div id="Why" class="tabcontent">
  
  <br><br><br><p>*  To create a single point of contact for the entire Startup ecosystem and enable knowledge exchange
and access to funding</p> 
<p>*  Many Startups do not reach their full potential due to limited guidance and access.</p>
<p>*  In today�s environment we have more Startups and entrepreneurs than ever before and the movement is at the cusp of a revolution.</p>
<p>*  Young Indians today have the conviction to venture out on their own and a conducive ecosystem lets them watch their ideas come   to life.</p>
<p>*  Beginners world believes that entrepreneurship has an unmatched ability to bring about disruptive change in India and engages with ventures across technology and impact areas like energy, environment, agriculture, healthcare and affordable technology. So we hope that it should operate in sectors and geographies where there are market failures and private support is not easy to find.</p>
</div>

<div id="How" class="tabcontent">
<br><br>
 <p>*  Assist Startups through their lifecycle with specific focus on important aspects like obtaining
financing, feasibility testing, business structuring advisory, enhancement of marketing skills,
technology commercialization and management evaluation.</p>
<p>*  We provide the overview of detailed market analysis of the startup such that the entrepreneur will have the vision of his idea in the market.</p>
<p>*  Beginners world wii help the new startups to know all the government action plans under startup India action plan.
<p>*  We promote investments into Startups by mobilizing the capital gains arising from sale of capital assets</p>
<p>*  We catalyse enterpreneurship by providing credit to innovators accross all sections of society</p>
<p>*  We promote the growth of Startups and address working capital requirements</p>
<p>*  Beginners world encourage seed-capital investment in Startups</p>
<p>*  We organize mentorship programs in collaboration with great minds of Country who put their efforts in fostering the business sector of the country.

  
</div>
  
</div>


<section id="main"> 
<div class="w3-container" style="padding:128px 16px;background-color: #d2d8e0" id="work">
  <h3 class="w3-center">HOW IT WORKS</h3>
<div class="container"> <div class="col col-sm-6"> <p style="text-align: center;"><img alt="" src="work1.png" style="width: 357px; max-width: 90%;" /></p>
 </div> <div class="col col-sm-6"> <br><br><h4>As a start-up business, you will undoubtedly need to source other services in order to manage and grow your business - no one person has all the skills and knowledge needed to effectively perform EVERY task within a business.</h4>
<br>
<i class="fa fa-hand-o-right"></i> Your future success may depend upon the quality and expertise of your supporting businesses and suppliers.<br><br>

<i class="fa fa-hand-o-right"></i> The team at Beginners World firm can connect you with recommended Local Business Partners who have been individually selected as our preferred service providers.<br><br>

<i class="fa fa-hand-o-right"></i> These hand-picked local businesses offer exclusive discounted products and services specifically for new and/or small businesses and have been carefully chosen based on their location, their willingness to support start-up businesses, and, most importantly, their reputation.

<p> </p><a href="" name="team"></a>
 </div> </div> </section>
 




<!-- Team Section -->
<!--<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">OUR TEAM</h3>
  
</div>->





<a href="" name="contact"></a>
<section style="background-color: white;padding-top: 30px;padding-bottom: 0px;">
<center>
<!--<div class="" style="max-width:900px">
<div class="mySlides" id="img" style="background-image: url(bg1.jpg);background-repeat: no-repeat;height: 450px;">
	<br><br><br><br><br><br><br><br><br><br><br><br>
	<h1 align="left" class="w3 animate-right" style="padding: 10px;color: white;text-shadow: 1px solid white;">VENKATA SAI KATEPALLI<br>
	ALL ROUNDER HTML,CSS,JAVASCRIPT,PHP,SQL<br>
	EMAIL:venkatasaisoft@gmail.com<br>
	MOBILE : +91 81 4224 14 15</h1>
</div>
  <!--<img class="mySlides" src="bg2.jpg" style="width:100%">
  <img class="mySlides" src="bg2.jpg" style="width:100%">
  <img class="mySlides" src="bg2.jpg" style="width:100%">--><!--
  <div class="mySlides" id="img" style="background-image: url(bg2.jpg);background-repeat: no-repeat;height: 450px;">
	<br><br><br><br><br><br><br><br><br><br><br><br>
	<h1 align="left" class="w3 animate-right" style="padding: 10px;color: white;text-shadow: 1px solid white;">VENKATA SAI KATEPALLI<br>
	ALL ROUNDER HTML,CSS,JAVASCRIPT,PHP,SQL<br>
	EMAIL:venkatasaisoft@gmail.com<br>
	MOBILE : +91 81 4224 14 15</h1>
</div>
<div class="mySlides" id="img" style="background-image: url(bg1.jpg);background-repeat: no-repeat;height: 450px;">
	<br><br><br><br><br><br><br><br><br><br>
	
</div>
</div>-->
<h1 align="center">OUR TEAM</h1>
<div class="mySlides" id="img" style="background-image:;background-repeat: no-repeat;height: 450px;">
<center>
<img src="bg1.jpg" style="border-radius: 50%;height: 180px;width: 180px;">
<h3 align="center" class="w3 animate-right" style="padding: 10px;color:black;text-shadow: 1px solid white;">VENKATA SAI KATEPALLI<br>
	#include<coder.h><br>
	EMAIL:venkatasaisoft@gmail.com<br>
	MOBILE : +91 81 4224 14 15</h3>


</div>
<div class="mySlides" id="img" style="background-image:;background-repeat: no-repeat;height: 450px;">
<center>
<img src="bg2.jpg" style="border-radius: 50%;height: 180px;width: 180px;">
<h3 align="center" class="w3 animate-right" style="padding: 10px;color:black;text-shadow: 1px solid white;">AKHIL DHAVALA<br>
	mySelf <- "Data Analyst!"<br>
	EMAIL:akhil.dhavala@gmail.com<br>
	MOBILE : +91 81 4224 14 15</h3>


</div>
<div class="mySlides" id="img" style="background-image:;background-repeat: no-repeat;height: 450px;">
<center>
<img src="logoe.png" style="border-radius: 50%;height: 180px;width: 180px;">
<h3 align="center" class="w3 animate-right" style="padding: 10px;color:black;text-shadow: 1px solid white;">VENKATA SAI KATEPALLI<br>
	ALL ROUNDER HTML,CSS,JAVASCRIPT,PHP,SQL<br>
	EMAIL:venkatasaisoft@gmail.com<br>
	MOBILE : +91 81 4224 14 15</h3>


</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>	
</section>





<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-half">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> @PVPSIT, VIJAYAWADA, INDIA</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +91 8333021838</p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: datta.koneru@gmail.com</p>
      <br>
      <form class="w3-centre">
        <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
        <p>
          <button class="w3-button w3-black" type="submit">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE
          </button>
        </p>
      </form>
    </div>
    
  </div>
</div>


 



</body>
</html>