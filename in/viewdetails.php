<?php
include'investorheader.php';
?>
<section style="padding-top: 130px;">
<?php
if(isset($_POST['idea_id']))
{

	$idea_id=$_POST['idea_id'];
$DBconnect = new mysqli("localhost","root","","startup");

// Check connection

if ($DBconnect->connect_error) {

    die("Connection failed: " . $DBconnect->connect_error);

}
$id=$_SESSION['ID'];
$checkdata="SELECT * FROM idea,user_info,category_map WHERE idea.i_id='$idea_id' and idea.user_id=user_info.id and category_map.c_id=idea.c_id";

 $query=$DBconnect->query($checkdata);

 if(mysqli_num_rows($query)>0)
 {
 
while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

$idid=$row['i_id'];
$idname=$row['idea_name'];
$status=$row['status'];
$name=$row['name'];
$hit=$row['hits'];
$cname=$row['category_name'];

?>
<div style="padding: 20px;border: 1px solid grey;border-radius: 5px; margin: 30px;box-shadow: 0 0.1em 1em grey;width: 80%;"><center>
<p align="center" style="color: green;padding-left: 30px;padding: 0;margin: 0;">Title : <?php print("$idname"); ?></p>
<p align="">

<p>Category : <?php print("$cname"); ?><p > By : <?php print("$name") ?></p></p></p></center>
<hr>

<center>
	<form method="post" action="invest.php">
	<input type="hidden" name="idea_id" value="<?php print("$idid"); ?>">
	<input type="submit" value="Invest" style="padding: 10px;font-weight: bold;background-color: green;color: white;cursor: pointer;">
		
	</form>
</center>
	
</div>
<?php
 }}
$hit++;
$update="update idea SET hits=$hit where i_id='$idea_id'";

 $query=$DBconnect->query($update);


}else{
 	# code...
 	header('Location: /startup/in/idealist.php');
 }
 ?>
 <?php





include'footer.php';
?>
