<?php
include'ideaheader.php';
?> 
<section style="padding-top: 90px;">
 <?php
 if(isset($_POST['category'])){
 $title=$_POST['title'];
$category=$_POST['category'];
$iddes=$_POST['iddes'];
echo "string";
$_SESSION['idea']['cat']=$category;
$_SESSION['idea']['title']=$title;
$_SESSION['idea']['des']=$iddes;


include'starttour.php';


}else
{
	 echo "none";
	 //header('Location: /startup/id/newidea.php');
}
?>
   <br/><br/>
    
 
