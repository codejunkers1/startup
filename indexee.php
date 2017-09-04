	
<!DOCTYPE html>
<html>
<head>
<link href='logo.png' rel='icon' type='image/x-icon'/>
	<title>Beginners World</title>
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
	$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

	$(window).scroll(function() {
if ($(this).scrollTop() > 100){  
    $('header').addClass("fixed");
  }
  else{
    $('header').removeClass("fixed");
  }
});
	$(window).scroll(function() {
if ($(this).scrollTop() > 100){  
    $('#tag').addClass("SlideUp");
  }
});
</script>
</head>
<style type="text/css">
htmll,bodyl{font-family:Verdana,sans-serif;font-size:15px;line-height:1.5}html{overflow-x:hidden}
h1l{font-size:36px}h2{font-size:30px}h3{font-size:24px}h4{font-size:20px}h5{font-size:18px}h6{font-size:16px}.w3-serif{font-family:serif}
h1l,h2,h3,h4,h5,h6{font-family:"Segoe UI",Arial,sans-serif;font-weight:400;margin:10px 0}.w3-wide{letter-spacing:4px}
hrl{border:0;border-top:1px solid #eee;margin:20px 0}
#btn ,button{
	background-color: #3366ff;
	color: white;
	
	padding: 10px;
	padding-left: 30px;
	padding-right: 30px;
	border-radius: 40px;
	 margin-top: 0px;
	 margin-right: 30px;
	 border: 2px solid #BA4A00;
	 cursor: pointer;
	 font-family:"Segoe UI",Arial,sans-serif;
	 text-decoration:none;
}
#btn:hover, button:hover{
	background-color:white ;
	color: #3366ff;
	font-weight: bold;
	padding: 10px;
	padding-left: 30px;
	padding-right: 30px;
	border-radius: 40px;
	 margin-top: 0px;
	 margin-right: 30px;
	 border: 2px solid #BA4A00;
	 cursor: pointer;
}
.nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: ;
    color: #456789;
    display: none;
}

.nav li {
	padding: 0;
	padding-top: 0;
    float: left;
}

.nav #link a {
    display: block;
    color: #0099cc;
    font-weight: bold;
    text-align: center;
    padding: 15px 15px;
    padding-top: 30px;
    text-decoration: none;
}

.nav #link a:hover {
    color:#BA4A00;
}
body
{
	background-image: url(bg1.jpg); 
margin: 0;
	font-family:"Comic Sans MS", cursive, sans-serif;
	
}
.nav button{
	background-color: #0099cc;
	color: white;
	font-weight: bold;
	padding: 10px;
	padding-left: 30px;
	padding-right: 30px;
	border-radius: 40px;
	 margin-top: 19px;
	 margin-right: 30px;
	 border: 2px solid #BA4A00;
	 cursor: pointer;
}
.nav button:hover{
	background-color:white ;
	color: #BA4A00;
	font-weight: bold;
	padding: 10px;
	padding-left: 30px;
	padding-right: 30px;
	border-radius: 40px;
	 margin-top: 19px;
	 margin-right: 30px;
	 border: 2px solid #BA4A00;
	 cursor: pointer;
}
.fixed button{
	background-color: #BA4A00;
	color: white;
	font-weight: bold;
	padding: 10px;
	padding-left: 30px;
	padding-right: 30px;
	border-radius: 40px;
	 margin-top: 0px;
	 margin-right: 30px;
	 border: 2px solid #BA4A00;
	 cursor: pointer;
}
.fixed button:hover{
	background-color:white ;
	color: #BA4A00;
	font-weight: bold;
	padding: 10px;
	padding-left: 30px;
	padding-right: 30px;
	border-radius: 40px;
	 margin-top: 0px;
	 margin-right: 30px;
	 border: 2px solid #BA4A00;
	 cursor: pointer;
}
p{
    margin-left: 100px;
}
  
.headline{
	font-weight: 100em;
	font-size: 50px;
	color:#E5E7E9;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.headline2{
	font-weight: 100em;
	font-size: 30px;
	color:#E5E7E9;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
body::-webkit-scrollbar {
    width: 1px;
}
 
body::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 3px rgba(0,1.0,0,0.3);
}
 
body::-webkit-scrollbar-thumb {
  background-color: #BA4A00;
  outline: 0px solid #BA4A00;
}
.data1{
	background-color: white;
	color: #797D7F;
	width: 100%;
	height: 450pt;
}
.datamai{
	background-color: white;
	color:white;
	width: 100%;
	height: 400pt;
}
.datamai{
	background-color: white;
	color:white;
	height: 400pt;
}
.td1{
	margin-right: 30px;
	padding: 40px;
	align-items: center;

}
.td1:hover{
	margin-right: 30px;
	padding: 40px;
	padding-top: 30px;
	padding-bottom: 50px;
	align-items: center;
	    box-shadow: 0 0.3em 1em #000;
	border-width: 11px;
	background-color:#28B463;
	border-radius: 0px;
	color: white;

}
#tag1{
	font-weight: bolder;
	font-size: ;
	padding: 5px;
	border-spacing: 1px;
}



.fixed{
	background-color: white;

	position: fixed;
	
	color: black;
	width: 100%;
	height: 80px;
	box-shadow: 0 0.1em 1em #000;
}
.fixed ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: ;
    color:black;
    float: right;
    display: block;
}

.fixed li {
	padding: 10px;
	padding-top: 20px;
    float: left;
}

.fixed #link a {
    display: block;
    color: black;
    font-weight: bold;
    text-align: center;
    padding: 10px;
    padding-top: 10px;
    text-decoration: none;
}

.fixed #link a:hover {
    color:#BA4A00;
}
.nav .pic{
	margin: 20px;width: 400px;height: 50px;padding-right: 100px;float: left;
}
.fixed .pic{
	margin:	10px;width: 300px;height: 40px;padding-right: 100px;float: left;

}
.newlog{
	width: 500px;
	height: 50px;
	padding: 20px;

}
</style>
<body>
<a href="" name="home"></a>
<section style=" " class="datamain">
<header class="nav">

<ul>
<li><img class="pic" src="logo.png" style=""></li>
	<li id="link" class="SlideDown"><a href="#home">HOME</a></li>
	<li id="link"><a href="#cat">INVESTOR</a></li>
	<li id="link"><a href="#bus">BUSINESS</a></li>
	<li id="link"><a href="#contact">CONTACT</a></li>
	<li id="link"><a href="login.php"><button>LOGIN</button></a></li>
	<li id="link"><a href="#menu"><button>SIGN UP</button></a></li>
</ul>
	
</header>

	
<center><div class="SlideDown">
<img src="logo.png" class="newlog">
<br>
<br>
<br><br>
<h1 class="headline">Welcome to Home Of StartUp's</h1>
<h2 class="headline2">Join with us and change your life.</h2>
<br>
<a href="#section1" id="btn">Start An Enterprise</a>
<br>
<br>
<br><br>
</div>
<br>
<br>
<br><br><br>
<br><br><br><br><br><br><br>






</section>

<SECTION class="data1">
	
<CENTER>
<br>
<h1>START UP PROGRAM</h1>
<span style="color: #BA4A00;border-top: 4px solid #BA4A00;">                </span>
<span style="color: #BA4A00;border-top: 4px solid green;">                </span>
<br>
<a href="" name="menu"></a>
<table id="tag" style="">
	<tr>
		<td class="td1">
		<center>
		<br><img src="startup.png"><br>
		<label id="tag1" >NEW STARTUP</label><br><br>
		Lets start a new StartUp with your Idea.<br><br>
		<a href="ideasignup.php"><button>Register Now</button></a></td>
		<td class="td1"><center>
		<br><img src="investor.png"><br>
		<label id="tag1">NEW INVESTOR</label><br><br>
		Invest to a new StartUp and make profit life.<br><br>
		<a href="investorsignup.php"><button>Register Now</button></a></td>
	</tr>
</table>
<br><br>
<br><br>
</SECTION>
<section style="color: yellow;height: 350pt;padding: 50px;background-image: url('pic5.jpg') norepeat;">
<br>
<br>
<style type="text/css">
	#tabwhat,#tabwhy,#tabhow {
		color: yellow;
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
<p>*  We accelerate in an ideal way of engaging with us – providing you a structured mechanism of learning, networking, 
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
<p>*  In today’s environment we have more Startups and entrepreneurs than ever before and the movement is at the cusp of a revolution.</p>
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

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;

    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

	
</section>
<section style="height: 300px;width: 100%;background-color:#EAEDED;padding-top: 50px;padding-bottom: 0px;">
	<center> 
	<h1>OUR PAIR UP COMPANIES</h1>
	<br>
<div style="width: 70%;background-color: white;padding-top: 30px;padding-bottom: 30px;border-right: 50px solid #E5E7E9;border-left: 50px solid #E5E7E9;overflow: hidden;">
	<style type="text/css">
		#img{
			padding: 10px;
			max-width: 1100px;
				
		}
		@keyframes animateleft{from{left:-300px;opacity:0} to{left:0;opacity:1}}
animate-right{position:relative;animation:animateright 0.4s}
	</style>
<marquee>
<img src="http://10000startups.com/wp-content/themes/nasscom/home/images/google-logo.jpg" width="148" height="70"><img src="http://10000startups.com/wp-content/themes/nasscom/home/images/micro-vanture.jpg" width="183" height="70"><img src="http://10000startups.com/wp-content/themes/nasscom/home/images/kotak-logo.jpg" width="164" height="70"><img src="http://10000startups.com/wp-content/themes/nasscom/home/images/ibm-logo.jpg" width="137" height="70"><img src="http://10000startups.com/wp-content/themes/nasscom/home/images/amazone-logo.jpg" width="137" height="70"><img src="http://10000startups.com/wp-content/themes/nasscom/home/images/facebook-logo.jpg" width="145" height="70"><img src="http://10000startups.com/wp-content/themes/nasscom/home/images/digital-ocean.jpg" width="145" height="70"></li>

</marquee></div>

</section>
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
	<br><br><br><br><br><br><br><br><br><br><br><br>
	<h1 align="left" class="w3 animate-right" style="padding: 10px;color:#F2F3F4;text-shadow: 1px solid white;">VENKATA SAI KATEPALLI<br>
	ALL ROUNDER HTML,CSS,JAVASCRIPT,PHP,SQL<br>
	EMAIL:venkatasaisoft@gmail.com<br>
	MOBILE : +91 81 4224 14 15</h1>
</div>
</div>-->
<h1 align="center">OUR TEAM</h1>
<div class="mySlides" id="img" style="background-image:;background-repeat: no-repeat;height: 450px;">
<center>
<img src="bg1.jpg" style="border-radius: 50%;height: 190px;width: 190px;">
<h1 align="center" class="w3 animate-right" style="padding: 10px;color:black;text-shadow: 1px solid white;">VENKATA SAI KATEPALLI<br>
	ALL ROUNDER HTML,CSS,JAVASCRIPT,PHP,SQL<br>
	EMAIL:venkatasaisoft@gmail.com<br>
	MOBILE : +91 81 4224 14 15</h1>


</div>
<div class="mySlides" id="img" style="background-image:;background-repeat: no-repeat;height: 450px;">
<center>
<img src="bg2.jpg" style="border-radius: 50%;height: 190px;width: 190px;">
<h1 align="center" class="w3 animate-right" style="padding: 10px;color:black;text-shadow: 1px solid white;">AKHIL DHAVALA<br>
	DATA SCIENTIST<br>
	EMAIL:akhil.dhavala@gmail.com<br>
	MOBILE : +91 81 4224 14 15</h1>


</div>
<div class="mySlides" id="img" style="background-image:;background-repeat: no-repeat;height: 450px;">
<center>
<img src="logoe.png" style="border-radius: 50%;height: 190px;width: 190px;">
<h1 align="center" class="w3 animate-right" style="padding: 10px;color:black;text-shadow: 1px solid white;">VENKATA SAI KATEPALLI<br>
	ALL ROUNDER HTML,CSS,JAVASCRIPT,PHP,SQL<br>
	EMAIL:venkatasaisoft@gmail.com<br>
	MOBILE : +91 81 4224 14 15</h1>


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

<?php 
include'footer.php';
?>
<script>

		$(window).scroll(function() {
			$('#section1').each(function(){
			var imagePos = $(this).offset().top;
			
			var topOfWindow = $(window).scrollTop();
				if (imagePos < topOfWindow+400) {
					$(this).addClass("slideUp");
				}
			});

			$('#pin').each(function(){
			var imagePos = $(this).offset().top;
			
			var topOfWindow = $(window).scrollTop();
				if (imagePos < topOfWindow+400) {
					$(this).addClass("hatch");
				}
			});

			$('#pop-up-message').each(function(){
			var imagePos = $(this).offset().top;
			
			var topOfWindow = $(window).scrollTop();
				if (imagePos < topOfWindow+400) {
					$(this).addClass("slideExpandUp");
				}
			});		

			$('#example-4').each(function(){
			var imagePos = $(this).offset().top;
			
			var topOfWindow = $(window).scrollTop();
				if (imagePos < topOfWindow+400) {
					$('.device-arrow').addClass("stretchRight");
				}
			});		

			$('#example-5').each(function(){
			var imagePos = $(this).offset().top;
			
			var topOfWindow = $(window).scrollTop();
				if (imagePos < topOfWindow+400) {
					$('.graph-bar').addClass("pullUp");
				}
			});					
								

		});

</script>

</body>
</html>