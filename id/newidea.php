<?php 
include'ideaheader.php';
?>



<section class="firsts">
<br>
<br>
<style type="text/css">
	label{
		font-size: 20px;
		font-weight: bold;
		font-family: arial;
		margin: 5px;
		float: left;
		margin-left: 30px;
		width: 75%;
	}
	.input{
		padding: 8px;
		border:1.5px solid black;
		border-radius: 5px;
		font-size: 15px;
		width: 75%;
		margin-left: 30px;
		display: inline;
	}
</style>

	<div style="padding: 20px;border:1px solid grey;box-shadow: 0 0.1em 0.1em #000;max-width: 80%;border-radius: 10px;margin-left: 10%;">
	<center><img src="logo.png"></center>
	<br>
<form method="post" action="finalideasubmit.php">
<label>Category :</label><br>


<select class="input" name="category" required>
	<option>Select Category</option>
<?php
// Create connection

$DBconnect = new mysqli("localhost","root","","startup");

// Check connection

if ($DBconnect->connect_error) {

    die("Connection failed: " . $DBconnect->connect_error);

}
 $checkdata="SELECT * FROM category_map";

 $query=$DBconnect->query($checkdata);

 if(mysqli_num_rows($query)>0)
 {
 
while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
$cid=$row['c_id'];
$cname=$row['category_name'];
?>
<option value="<?php print("$cid"); ?>">
<?php print("$cname"); ?></option>
<?php
}}else
{
	echo "no category";

}
?></select>
<br>
<label>Idea Title :</label><br>
<input class="input" type="text" name="title" required><br>
<label>Description :</label><br>
<textarea class="input" rows="20" cols="100" name="iddes" required></textarea><br>	
<input type="submit" value="submit">
</form>






</form>



</div>
</center>
	
