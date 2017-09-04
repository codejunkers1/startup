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
<form method="post" action="ideasubmit.php">
<label>Category :</label><br>


<select class="input" name="category">
	<option>Select Category</option>
<?php
include'dbconnect.php';
	$query="select * from category_map";

$result = $con->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $cid=$row["cid"];
        $cname=$row["category_name"];

?>
<option value="<?php print("$cid"); ?>"><?php print("$cname"); ?></option>
<?php

    }
}
?>
</select><br>
<label>Idea Title :</label><br>
<input class="input" type="text" name="title"><br>
<label>Description :</label><br>
<textarea class="input" rows="20" cols="100" name="iddes"></textarea><br>	
<input type="submit" value="submit">
</form>






</form>



</div>
</center>
	
</section>