
<?php
include'session.php';
$nm=$_SESSION['NAME'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Begineers World</title>
	<style type="text/css">
	.firsts{
		padding-top: 80px;
		background-color: white;

	}
	.nav .pic{
	padding: 10px;width: 400px;height: 45px;padding-right: 300px;float: left;
	padding-bottom: 0px;
	margin-bottom: 0px;
}
	header{

		background-color: white;
    border-bottom: 0.5px solid grey;
    width: 100%;
    top: 0;
    float: right;
    position: fixed;
    box-shadow: 0 0.1em 0.5em #000;

	}
		.nav ul {
	
    list-style-type: none;
    margin: 0;
    padding: 8px;
    overflow: hidden;
    background-color: ;
    color: #456789;
    
 
}
body::-webkit-scrollbar {
    width: 5px;
}
 
body::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 3px rgba(0,1.0,0,0.3);
}
 
body::-webkit-scrollbar-thumb {
  background-color: #BA4A00;
  outline: 0px solid #BA4A00;
}

.nav li {
	padding: 0;
	padding-top: 0px;
    float: left;
    

}

.nav #link a {
    display: block;
    color: black;
    font-weight: bold;
    text-align: center;
    padding: 0px 15px;
    padding-top: 30px;
    text-decoration: none;
}

.nav #link a:hover {
    color:#BA4A00;
}

body
{
	background-color: white; 
margin: 0;
	    font-family:"Comic Sans MS", cursive, sans-serif;
	
}
.nav button{
	background-color: #BA4A00;
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
	</style>
</head>
<body>
<style>



 .dropbtn {
    float: right;padding-right: 0px;margin-top: 30px;
    
}

 .dropdown:hover .dropbtn {
    background-color: white;
    color:red;
}



.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
   margin-top: 51px;	
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
    font-weight: bold;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

</style>
<header class="nav">
	<ul>
	<li><img class="pic" src="logo2.png" style=""></li>
		<li id="link"><a href="investorhome.php">Home</a></li>
		<li id="link"><a href="idealist.php">Ideas</a></li>
		<li id="link"><a href="profile.php">Profile</a></li>
		<li id="link"><a href="contact.php">Contact Us</a></li>
		<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">⛄ <?php ucwords($nm); print("$nm"); ?></a>
    <div class="dropdown-content">
      <a href="profile.php"><img src="man1.png" height="15px" width="15px"> Profile</a>
      <a href="">&#9965; Settings</a>
      <a href="logout.php"><img src="logout1.png" height="15px" width="15px"> Logout</a>
    </div>
  </li>
		<!--<li id="pro" style="float: right;padding-right: 20px;padding-top: 30px; "><div id=""><a style="background-color: #FAE38E;color: #BA4A00;padding: 8px;margin-bottom: 0px; border-radius: 30px; font-size: 15px;font-weight: bold;">⛄ <?php ucwords($nm); print("$nm"); ?></a></div></li>-->
		
	</ul>
</header>

