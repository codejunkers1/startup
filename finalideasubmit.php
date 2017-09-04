<?php
include'ideaheader.php';
?> 
<section style="padding-top: 90px;">
 <?php
 if(isset($_POST['category'])){
 $title=$_POST['title'];
$category=$_POST['category'];
$iddes=$_POST['iddes'];
}

// Create connection

$DBconnect = new mysqli("localhost","root","","bg");

// Check connection

$sqlselect = "select max(idea_id) from idealist";


$result = $DBconnect->query($sqlselect);

   
 $row = $result->fetch_assoc();

    $maxid=$row["max(idea_id)"];

   $maxid++;
   $uid=$_SESSION['ID'];
   $today = date("Ymd");

//if ($DBconnect->query($sqlinsert) == TRUE) {


$sqlinsertt = "INSERT INTO idealist VALUES($maxid,'$uid','$title','$iddes','pending verification','$today')"; 
 
if ($DBconnect->query($sqlinsertt) == TRUE) {


//$to=$mobile;
///$msg=$id;
//include'http://sai5171.web44.net/msg.php?uid=8142241415&pwd=5611&to=8142241415&msg=done';






?>
<h1>Registration Sucessfully Completed!</h1><br/>
<?php

}
?>
   <br/><br/>
    
 
