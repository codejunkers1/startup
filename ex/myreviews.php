<?php
include'expertheader.php';
?>
<section style="padding-top: 130px;">
<?php
$DBconnect = new mysqli("localhost","root","","startup");

// Check connection

if ($DBconnect->connect_error) {

    die("Connection failed: " . $DBconnect->connect_error);

}
$id=$_SESSION['ID'];
$checkdata="SELECT * FROM user_info,review,idea,category_map WHERE review.expert_id='$id' and idea.i_id=review.idea_id and user_info.id=idea.user_id and category_map.c_id = idea.c_id";

 $query=$DBconnect->query($checkdata);

 if(mysqli_num_rows($query)>0)
 {
 
while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

$idid=$row['i_id'];
$idname=$row['idea_name'];
$status=$row['status'];
$name=$row['name'];
$cname=$row['category_name'];
$rating=$row['rating'];

?>
<div style="padding: 20px;border: 2px solid grey;border-radius: 30px; margin: 30px;box-shadow: 0 0.1em 1em grey;width: 80%;">
<h1 style="color: green;padding-left: 30px;padding: 0;margin: 0;"><?php print("$idname"); ?></h1>
<p align="right">
<form method="post" action="viewdetails.php"><input type="hidden" name="idea_id" value="<?php print("$idid") ?>">
<input type="submit" value="View Details"></form></p>
<hr>
<p>Category : <?php print("$cname"); ?><p align=right> By : <?php print("$name") ?></p></p>

	
</div>
<?php
 }}
 ?>