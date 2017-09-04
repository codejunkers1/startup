<?php 

include'ideaheader.php';
?>
<section style="padding-top: 130px;">
<?php
$DBconnect = new mysqli("localhost","root","","bg");

// Check connection

if ($DBconnect->connect_error) {

    die("Connection failed: " . $DBconnect->connect_error);

}
$id=$_SESSION['ID'];
$checkdata="SELECT * FROM idealist,users WHERE idealist.uid='$id' and users.id=$id";

 $query=$DBconnect->query($checkdata);

 if(mysqli_num_rows($query)>0)
 {
 
while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

$idid=$row['idea_id'];
$idname=$row['idname'];
$status=$row['status'];
$des=$row['description'];
$name=$row['name'];

?>
<div style="padding: 20px;border: 2px solid grey;border-radius: 30px; margin: 30px;box-shadow: 0 0.1em 1em grey;width: 80%;">
<h1 style="color: green;padding-left: 30px;padding: 0;margin: 0;"><?php print("$idname"); ?></h1>
<p align="right">
<input type="submit" value="View Details"></p>
<hr>
<p>Category : Business<p align=right> By : <?php print("$name") ?></p></p>

	
</div>
<?php
 }}
 ?>