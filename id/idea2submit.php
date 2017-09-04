<?php







include'ideaheader.php';


$DBconnect=new mysqli("localhost","root","","startup");

// Check connection

if ($DBconnect->connect_error) {

    die("Connection failed: " . $DBconnect->connect_error);

}
$lis = array();
$checkdata="SELECT * FROM user_info where user_type='EXPERT'";

 $query=$DBconnect->query($checkdata);

  if(mysqli_num_rows($query)>0)
 {
 $i=1;
while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

           
$mobile=$row['mobile'];






  include('func.php');
error_reporting(0);
$ser="http://site24.way2sms.com/";
$ckfile = tempnam ("/tmp", "CURLCOOKIE");
$login=$ser."Login1.action";
// * Reciving Username of Way2sms A/c from Html form //
$uid="8142241415";
// * Reciving Password of Way2sms A/c from Html form //
$pwd="5611";
// * To whome the message send to //
$to=$mobile;
// * Message to be sended //


$msg='New Idea is Entered Into Our incubator You have to review it.For Any Queries Contact +91 8142241415.  @ Beginners World Team. ';





//$msg=input($_GET['msg']);
if(!$to)
{ $to=$uid; }
if(!$msg)
{ $msg=rword(5).rword(5).rword(5).rword(5).rword(5); }
$captcha=input($_REQUEST['captcha']);
flush();
if($uid && $pwd)
{
$ibal="0";
$sbal="0";
$lhtml="0";
$shtml="0";
$khtml="0";
$qhtml="0";
$fhtml="0";
$te="0";
//echo '<div class="content">User: <span class="number"><b>'.$uid.'</b></span><br>';
flush();

$loginpost="gval=&username=".$uid."&password=".$pwd."&Login=Login";

$ch = curl_init();
$lhtml=post($login,$loginpost,$ch,$ckfile);
////curl_close($ch);

if(stristr($lhtml,'Location: '.$ser.'vem.action') || stristr($lhtml,'Location: '.$ser.'MainView.action') || stristr($lhtml,'Location: '.$ser.'ebrdg.action'))
{
preg_match("/~(.*?);/i",$lhtml,$id);
$id=$id['1'];
if(!$id)
{
goto end;
}
// * Login Sucess Message//
goto bal;
}
elseif(stristr($lhtml,'Location: http://site2.way2sms.com/entry'))
{
// * Login Faild or SMS Send Error Message 3//
goto end;
}
else
{
// * Login Faild or SMS Send Error Message 2//
  //echo " failed of sending otp".$otp;
goto end;
}
bal:
$msg=urlencode($msg);
$main=$ser."smstoss.action";
$ref=$ser."sendSMS?Token=".$id;
$conf=$ser."smscofirm.action?SentMessage=".$msg."&Token=".$id."&status=0";

$post="ssaction=ss&Token=".$id."&mobile=".$to."&message=".$msg."&Send=Send Sms&msgLen=".strlen($msg);
$mhtml=post($main,$post,$ch,$ckfile,$proxy,$ref);
if(stristr($mhtml,'smscofirm.action?SentMessage='))
// * Message Sended Sucessfull Message//
{
  //echo "otp sent to your mobile";
}
else
// * Login Faild or SMS Send Error Message 1//
{ // onclick="this.parentElement.style.display="none"" class="w3-closebtn">&times;</span>
echo"otp not sent your mobile otp is:".$otp;
}
curl_close($ch);

end:

//echo "</div>";
flush();

}}








if (isset($_POST['q1'])) {
  # code...
  $q1=$_POST['q1'];
  $q2=$_POST['q2'];
  $q3=$_POST['q3'];
 // $q4=$_POST['q4'];
  $q5=$_POST['q5'];
  $q6=$_POST['q6'];
  $q7=$_POST['q7'];
  $q8=$_POST['q8'];
  $q9=$_POST['q9'];
  $q10=$_POST['q10'];
  $q11=$_POST['q11'];
  $q12=$_POST['q12'];
  $q13=$_POST['q13'];
  $q14=$_POST['q14'];
  $q15=$_POST['q15'];
 // $q16=$_POST['q16'];
  $q17=$_POST['q17'];
  $q18=$_POST['q18'];
  $q19=$_POST['q19'];
  $q20=$_POST['q20'];
  $q21=$_POST['q21'];
  $q22=$_POST['q22'];
  $q23=$_POST['q23'];
  $q24=$_POST['q24'];
  $q25=$_POST['q25'];
  $q26=$_POST['q26'];
  $q27=$_POST['q27'];
  $q28=$_POST['q28'];
  $q29=$_POST['q29'];
  $q30=$_POST['q30'];
  $q31=$_POST['q31'];
  $q32=$_POST['q32'];
  $q33=$_POST['q33'];
  $q34=$_POST['q34'];

include'temp.php';

$rate=q_analysis($q1,$q2,$q6,$q10,$q13,$q16,$q20,$q31);





include'gen_id.php';
$idea_id=generate_id(2);

  $DBconnect = new mysqli("localhost","root","","startup");



//
$sqlinsert = "INSERT INTO idea_prototype VALUES('$idea_id','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$q21','$q22','$q23','$q24','$q25','$q26','$q27','$q28','$q29','$q30','$q31','$q32','$q33','$q34')"; 


 

if ($DBconnect->query($sqlinsert) == TRUE) {
$insert="insert into idea values('$idea_id','$id','C0007','$iname','','','pending verification','$today',0,$rate)";

if ($DBconnect->query($sqlinsert) == TRUE) {
  }
?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
     
    <div class="w3-col s8 w3-bar">
    
      <a href="#" class="w3-bar-item w3-button"><i class=""></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class=""></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class=""></i></a>
    </div>
  </div>
  
  <div class="w3-container">
    <h5>Services</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>&nbsp; Close Menu</a>
    <a  class="w3-bar-item w3-button w3-padding w3-blue" onClick="clearr('marketa');"><i class="fa fa-users fa-fw" "></i>&nbsp; Market Research</a>
    <a href="#" class="w3-bar-item w3-button w3-padding" onClick="clearr('marketb');"><i class="fa fa-eye fa-fw"></i>&nbsp; Incubator</a>
    <a href="#" class="w3-bar-item w3-button w3-padding" onClick="clearr('marketc');"><i class="fa fa-users fa-fw"></i>&nbsp; Requirements</a>
    <a href="#" class="w3-bar-item w3-button w3-padding" onClick="clearr('marketd');"><i class="fa fa-bullseye fa-fw"></i>&nbsp; Domain Experts</a>
    <a href="#" class="w3-bar-item w3-button w3-padding" onClick="clearr('markete');"><i class="fa fa-diamond fa-fw"></i>&nbsp; Prototype</a>
    <a href="#" class="w3-bar-item w3-button w3-padding" onClick="clearr('marketf');"><i class="fa fa-bell fa-fw"></i>&nbsp; Intelluctual property </a>
    <a href="#" class="w3-bar-item w3-button w3-padding" onClick="clearr('marketg');"><i class="fa fa-bank fa-fw"></i>&nbsp; Marketing Strategy</a>
    <a href="#" class="w3-bar-item w3-button w3-padding" onClick="clearr('marketh');"><i class="fa fa-history fa-fw"></i>&nbsp; Customer feedbacks/
    reviews</a>
    <a href="#" class="w3-bar-item w3-button w3-padding" onClick="clearr('marketi');"><i class="fa fa-cog fa-fw"></i>&nbsp; Legal issues</a>
    <a href="#" class="w3-bar-item w3-button w3-padding" onClick="clearr('marketj');"><i class="fa fa-cog fa-fw"></i>&nbsp; Expert Reviews</a>
    <a href="#" class="w3-bar-item w3-button w3-padding" onClick="clearr('marketk');"><i class="fa fa-cog fa-fw"></i>&nbsp; Finance</a><br><br>
    
  </div>
</nav>

<style type="text/css">
  #marketb,#marketc,#marketd,#markete,#marketf,#marketg,#marketh,#marketi,#marketj,#marketk{
    display: none;
  }
</style>
<div style="margin-left: 300px;margin-top: 50px;">
<div id="marketa" class="w3-container person">
  <br>
  
  <h3 class="w3-opacity">1.Startups :-</h3>
  <h5> Total Startups :- 1500+ </h5>
  <h5> Incorporated in 2016 :- 180+</h5>

  <h3 class="w3-opacity">2.Customer segments :-</h3>
  <h5> B2B :- 85% </h5>
  <h5> B2C :- 15%</h5>

  <h3 class="w3-opacity">3.Funding :-</h3>
  <h5> Total Funding: USD 1.8 billion in 2016 </h5>
  <h5> Down by approx. 12% YoY</h5>
  
  <h3 class="w3-opacity">4. Key Features :-</h3>
  <h5> Fastest growing E-Commerce Market in the world. </h5>
  <h5> 76% of online shoppers belong to 8 metro cities of India.</h5>
  <h5> 65% e-commerce sales are generated by mobile/tablet.</h5>
  
</div></div>
<div style="margin-left: 300px;margin-top: 50px;">
<div id="markete" class="w3-container person">
  <br>
  
  
  <h3 class="w3-opacity">2.Customer segments :-</h3>
  <h5> B2B :- 85% </h5>
  <h5> B2C :- 15%</h5>

  <h3 class="w3-opacity">3.Funding :-</h3>
  <h5> Total Funding: USD 1.8 billion in 2016 </h5>
  <h5> Down by approx. 12% YoY</h5>
  
  <h3 class="w3-opacity">4. Key Features :-</h3>
  <h5> Fastest growing E-Commerce Market in the world. </h5>
  <h5> 76% of online shoppers belong to 8 metro cities of India.</h5>
  <h5> 65% e-commerce sales are generated by mobile/tablet.</h5>
  
</div></div>

<div style="margin-left: 300px;margin-top: 50px;">
<div id="marketb" class="w3-container person">
  <br>
  
  <h3 class="w3-opacity">1.Autonebula :-</h3>
  <p> Claiming to be the first incubator-accelerator that focusses on Connected Transport, its aim is to create a dialogue across the public and private sectors, it aims to incubate startups related to IoT projects around Connected Cars, Vehicle Management, Traffic Management, Vehicle Logistics, Telemetry, Navigation, Infotainment, and Data Analytics.</p>

  <h3 class="w3-opacity">2.GSF Global Accelerator :-</h3>
  <p> GSF launched an accelerator and an early stage fund to invest in IoT and cloud startups in collaboration with Cisco Investments. GSF also runs an early-stage fund called GSF SuperAngels, which is backed by 20 digital founders and early-stage investors in India.</p>

  <h3 class="w3-opacity">3.HyperCat:-</h3>
  <p>this exclusive incubator was launched to handhold IoT startups in Hyderabad’s Hi-Tech City. The incubator has the backing of 700 businesses, globally, and houses 40 startups.The incubator will help Indian startups gain access to skills, technology, and funding opportunities to accelerate the development of valuable IoT and Smart Cities services.</p>
  
  <h3 class="w3-opacity">4.Qualcomm®’s QDIC :-</h3>
  <p>The Qualcomm® Design in India Challenge (QDIC), in association with NASSCOM, through this competition aims to discover startups in product design, development, and manufacturing in the domains of hardware and Internet of Things (IoT) for healthcare, education, banking, automotive as well as Smart Cities sectors. </p>

  <h3 class="w3-opacity">5.Ashoka -ISB –Microsoft Ventures (AIM) Incubator :-</h3>
  <p>the Indian School of Business and Ashoka University in association with Microsoft Ventures. The investment pool is said to be as high as Rs 1 crore to be put into startups with a focus on Smart Cities. Further, an investment of Rs 7-10 lakh will be put in each venture selected, while looking at 8-10 teams.
Microsoft Ventures will provide software and technology support for the programme.</p>

<style type="text/css">
  th,td{
    border-bottom: 0.5px solid black;"
  }
</style>
<table style="border-bottom: 0.5px solid black;"><tr style="border:1px solid black;"><th>Incubator</th>
<th>Location</th>
<th>No Of Startups</th>
<th>No of Investors</th>
<th>Amount Invested</th></tr>

<tr style="border-bottom: 0.5px solid black;"><td>Autonebula</td>
<td>1</td>
<td>2</td>
<td>3</td>
<td>3</td>
</tr>
<tr style="border-bottom: 0.5px solid black;"><td>GSF Global Accelerator</td>
<td>1</td>
<td>2</td>
<td>3</td>
<td>3</td>
</tr>

<tr style="border-bottom: 0.5px solid black;"><td>HyperCat</td>
<td>2</td>
<td>3</td>
<td>4</td>
<td>4</td>
</tr>

<tr style="border-bottom: 0.5px solid black;"><td>Qualcomm®’s QDIC</td>
<td>3</td>
<td>4</td>
<td>5</td>
<td>5</td>
</tr>
<tr style="border-bottom: 0.5px solid black;"><td>Ashoka -ISB –Microsoft Ventures (AIM) Incubator</td>
<td>5</td>
<td>6</td>
<td>7</td>
<td>7</td>
</tr>







</table>



  
</div></div>
<div style="margin-left: 300px;margin-top: 50px;">
<div id="marketh" class="w3-container person">
  <br>
  
  
  <h3 class="w3-opacity">3.HyperCat:-</h3>
  <p>this exclusive incubator was launched to handhold IoT startups in Hyderabad’s Hi-Tech City. The incubator has the backing of 700 businesses, globally, and houses 40 startups.The incubator will help Indian startups gain access to skills, technology, and funding opportunities to accelerate the development of valuable IoT and Smart Cities services.</p>
  
  <h3 class="w3-opacity">4.Qualcomm®’s QDIC :-</h3>
  <p>The Qualcomm® Design in India Challenge (QDIC), in association with NASSCOM, through this competition aims to discover startups in product design, development, and manufacturing in the domains of hardware and Internet of Things (IoT) for healthcare, education, banking, automotive as well as Smart Cities sectors. </p>

  <h3 class="w3-opacity">5.Ashoka -ISB –Microsoft Ventures (AIM) Incubator :-</h3>
  <p>the Indian School of Business and Ashoka University in association with Microsoft Ventures. The investment pool is said to be as high as Rs 1 crore to be put into startups with a focus on Smart Cities. Further, an investment of Rs 7-10 lakh will be put in each venture selected, while looking at 8-10 teams.
Microsoft Ventures will provide software and technology support for the programme.</p>

</div></div>

<div style="margin-left: 300px;margin-top: 50px;">
<div id="marketc" class="w3-container person">
  <br>
  
  <p>Building a mind boggling application is no simple errand, particularly an associated IoT arrangement utilizing equipment. It's an insane universe of alternatives out there right now which can instigate investigation loss of motion. We have made an enormous efforts on the all the possible working services that we thought can be of best accessibilities in the present era. This list composes of various entities that are required to create a deft solution.

<h3>Tessel 2</h3>

<p>Tessel 2 is a powerful IoT and robotic development platform. Use each of the libraries of Node.JS to make valuable gadgets in minutes with Tessel. Collaborate with the physical world from detecting to activation to interfacing with different gadgets. Every module has an open source library on NPM, with guidelines and instructional exercises accessible on the web. It's truly plug, NPM introduce, and play.

Tessel 2 runs JavaScript and backings NPM (the Node package manager) — that is HTTP, Twitter, web server, shading, and sync appropriate out of the case. Tessel 2 likewise has the ability to bolster various language.

Utilize your most loved content tool and libraries to program Tessel 2, much the same as any web advancement condition. Transferring new code is as simple as Tessel run!

Tessel has been equipped with two processors  which are entitled to run the firmware applications at speed and energize the better I/O control and power service. To cater your needs related to DIY solution, you may choose NodeMCU for your work. </p>

<h3>PlatformIO</h3>

<p>PlatformIO is a cross-platform IoT development environment that incorporates an IDE, construct framework, and library director.

PlatformIO is one of the most promising IoT development structure that inhibits an IDE module with a library manager. Platform IO provides the most efficient solutions in IoT app development as it facilitates:

Quick Development

C/C++ Intelligent Code Completion and Smart Code Linter for quick expert improvement. Multi-ventures work process with Multiple Panes. Subjects Support with dim and light hues.

Installed Development

Cross-platform Build System without outer conditions to the OS programming: 350+ embedded sheets, 20+ advancement platforms, 10+ structures. Arduino and ARM mbed perfect.

In-built Terminal

Worked in Terminal with PlatformIO Core and support for the capable Serial Port Monitor. Every single propelled instrument without leaving your most loved advancement condition.</p>

<h4>IBM Watson</h4>

<p>IBM Watson is working with organizations, researchers, scientists, and governments to outflank our greatest difficulties.

Watson is a psychological innovation that can take on a similar mindset as a human.</p>

<h4>Get it</h4>

<p>With Watson, you can break down and decipher the majority of your information, including unstructured content, pictures, sound and video.

Reason With Watson, you can give customized proposals by comprehension a client's identity, tone, and feeling.

Learn With Watson, you can use machine figuring out how to develop the topic ability in your applications and frameworks.Associate

With Watson, you can make chat bots that can take part in dialogue exchange.

The IBM Watson APIs consolidate a substantial gathering of different administrations. You can perceive inquiries in pictures, grasp discourse supposition, and that is just the tip of the ice sheet. You can take a gander at the entire range here. They've made a phenomenal showcasing with respects of continuing developing accommodating service for the IoT.</p>

<h4>Twilio Programmable Wireless</h4>

<p>The fourth apparatus is a fresh out of the plastic new service from one of best developer instrument organizations out there. Twilio’s Signal Conference is a new service which enables availability of smartphones to IoT projects. Twilio Programmable Wireless service incorporates the capacity to ensure the gizmos to be controlled anytime or anywhere. This is an ideal for an extensive variety of utilizations including vehicle following and then some. The entire thing is truly shabby too. SIM cards are $5 to purchase and afterward just $2 every month in addition to $.10 per MB of information utilized. In case you're searching for something more bulky then they have a bigger arrangement for devouring GBs of information. Take note of that this service is still in review mode.

This is a space that is warming up also. There are various different choices for smartphone network including Hologram.</p>
  
</div></div>

<div style="margin-left: 300px;margin-top: 50px;">
<div id="marketf" class="w3-container person">
  <br>
  
  <h3> One's new IoT product should be patented first as it should not be copied by any of the others </h3>

  <br>
  <br>
  <h3>So here is the online patent filling application.</h3>

  <a href="http://ipindiaonline.gov.in/epatentfiling/goForLogin/doLogin" target="_blank">Online Patent application</a>
  
</div></div>

<div style="margin-left: 300px;margin-top: 50px;">
<div id="marketi" class="w3-container person">
  <br>
  
  <h2> As systems of systems are linked together by sensors, we are faced with a new set of ethical and legal questions:  </h3>

  <br>
  <br>
  <h4>Security</h4>
   <h4>Privacy</h4>
    <h4>Transperancy</h4>
     <h4>Data Ownership</h4>
      <h4>Ethical and legal Usage and sharing</h4>
       <h4>Inappropriate Situations for Data Collection</h4>
        <h4>"Digital Knowledge Divide"</h4>

  
  
</div></div>

<div style="margin-left: 300px;margin-top: 50px;">
<div id="marketg" class="w3-container person">
  <br>
  
  <h2> One line description of your comapny : </h3>
   <p>Response : IoT based vehicle spped control</p>
   <h2>Expert Rating : 4</h2>
  <br>
  <h2> Business and problem statement : </h3>
   <p>Response : Testing the speed control using the IoT based app.</p>
   <h2>Expert Rating : 5</h2>
   <br>
   <h2> Is your solution unique: </h3>
   <p>Response : validating the speed of the vehilce with the app</p>
   <h2>Expert Rating : 3</h2>
  <h4>Security</h4>
   <h4>Privacy</h4>
    <h4>Transperancy</h4>
     <h4>Data Ownership</h4>
      <h4>Ethical and legal Usage and sharing</h4>
       <h4>Inappropriate Situations for Data Collection</h4>
        <h4>"Digital Knowledge Divide"</h4>

  
  
</div></div>
<div style="margin-left: 300px;margin-top: 50px;">
<div id="marketd" class="w3-container person">
<h2> Business and problem statement : </h3>
   <p>Response : Testing the speed control using the IoT based app.</p>
   <h2>Expert Rating : 5</h2>
   <br>
   <h2> Is your solution unique: </h2>
   <p>Response : validating the speed of the vehilce with the app</p>
   <h2>Expert Rating : 3</h2></div></div>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

 
<div style="margin-left: 300px;margin-top: 50px;">
<div id="marketj" class="w3-container person">


  
</div></div>
<div style="margin-left: 300px;margin-top: 50px;">
<div id="marketk" class="w3-container person">

<h3>Finance</h3>
<h3>Investors in IOT based startups</h3>
<h3>Sequio capital</h3>
<h3>Softbank</h3>
<h3>Microsoft Ventures</h3>
<h3></h3>
<h3>Finance</h3>
  
</div></div>
  

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
  function clearr(ele)
  {
    if(ele=='marketa')
    {
      
      document.getElementById("marketa").style.display='block';

    }else{
      document.getElementById("marketa").style.display='none';
    }
    if(ele=='marketb')
    {
      document.getElementById("marketb").style.display='block';

    }else{
      document.getElementById("marketb").style.display='none';
    }
    if(ele=='marketc')
    {
      document.getElementById("marketc").style.display='block';

    }else{
      document.getElementById("marketc").style.display='none';
    }
    if(ele=='marketd')
    {
      document.getElementById("marketd").style.display='block';

    }else{
      document.getElementById("marketd").style.display='none';
    }
    if(ele=='markete')
    {
      document.getElementById("markete").style.display='block';

    }else{
      document.getElementById("markete").style.display='none';
    }
    if(ele=='marketf')
    {
      document.getElementById("marketf").style.display='block';

    }else{
      document.getElementById("marketf").style.display='none';
    }
    if(ele=='marketg')
    {
      document.getElementById("marketg").style.display='block';

    }else{
      document.getElementById("marketg").style.display='none';
    }
    if(ele=='marketh')
    {
      document.getElementById("marketh").style.display='block';

    }else{
      document.getElementById("marketh").style.display='none';
    }
    if(ele=='marketi')
    {
      document.getElementById("marketi").style.display='block';

    }else{
      document.getElementById("marketi").style.display='none';
    }
    if(ele=='marketj')
    {
      document.getElementById("marketj").style.display='block';

    }else{
      document.getElementById("marketj").style.display='none';
    }
    if(ele=='marketk')
    {
      document.getElementById("marketk").style.display='block';

    }else{
      document.getElementById("marketk").style.display='none';
    }
  }
</script>
<?php
}else
{
  echo "out of code";
}}}?>