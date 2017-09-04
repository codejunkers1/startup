<?php
include'investorheader.php';
?>
<section style="padding-top: 130px;">
<?php
if(isset($_POST['idea_id']))
{
	$idea_id=$_POST['idea_id'];
	$id=$_SESSION['ID'];

$DBconnect = new mysqli("localhost","root","","startup");

$sqlinsert = "UPDATE idea SET investor_id=$id where i_id=$idea_id"; 

if ($DBconnect->query($sqlinsert) == TRUE) {

echo "done";
}
else
printf("Errormessage: %s\n", $DBconnect->error);



}
?>
	
</section>