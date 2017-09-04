<?php 

include'investorheader.php';
?>
<section style="padding-top: 130px;">
<style type="text/css">
	#btv{
		padding: 5px;
		background-color: #F4D03F;
		color: white;
		font-weight: bold;
		border:2px  solid #F4D03F;
		cursor: pointer;
		border-radius: 3px;
	}
	#bts{
		padding: 5px;
		background-color: #5499C7;
		color: white;
		font-weight: bold;
		border:2px  solid #5499C7;
		cursor: pointer;
		border-radius: 3px;
	}
	#btm{
		padding: 5px;
		background-color: #229954;
		color: white;
		font-weight: bold;
		border:2px  solid #229954;
		cursor: pointer;
		border-radius: 3px;
		text-decoration: none;
	}
	#btv:hover{
		padding: 5px;
		background-color: white;
		color: #F4D03F;
		font-weight: bold;
		border:2px  solid #F4D03F;
		cursor: pointer;
	}
	#bts:hover{
		padding: 5px;
		background-color: white;
		color:#5499C7;
		font-weight: bold;
		border:2px  solid #5499C7;
		cursor: pointer;
	}
	#btm:hover{
		padding: 5px;
		background-color: white;
		color: #229954;
		font-weight: bold;
		border:2px  solid #229954;
		cursor: pointer;
	}

</style>
<?php
$DBconnect = new mysqli("localhost","root","","startup");

// Check connection

if ($DBconnect->connect_error) {

    die("Connection failed: " . $DBconnect->connect_error);

}
$id=$_SESSION['ID'];
$checkdata="SELECT * FROM idea,user_info,category_map WHERE idea.user_id='$id' and user_info.id=idea.user_id and category_map.c_id=idea.c_id  ORDER BY idea.date DESC";

 $query=$DBconnect->query($checkdata);

 if(mysqli_num_rows($query)>0)
 {
 
while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

$idid=$row['i_id'];
$idname=$row['idea_name'];
$status=$row['status'];
$name=$row['name'];
$hits=$row['hits'];
$invest=$row['investor_id'];
$cname=$row['category_name'];
$cid=$row['c_id'];
$count;

?>
<div style="padding: 20px;border: 2px solid grey;border-radius: 5px; margin: 30px;box-shadow: 0 0.1em 1em grey;width: 80%;">

<table width="100%" border="0">
	<td width="70%"><h1 style="color: green;padding-left: 30px;padding: 0;margin: 0;"><?php print("$idname"); ?></h1></td>
	<td width="" style="">
<form method="post" action="viewdetails.php"><input type="hidden" name="idea_id" value="<?php print("$idid") ?>">
<input type="submit" id=btv value="View Details"></form></td>
</table>



<table width="100%"><td width=60%>Category : <?php print("$cname"); ?></td><td align="right">By : <?php print("$name"); ?></td></table>
<hr>Hits : <?php print("$hits"); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<span>Investment Status : <?php if($invest!="")
{
	echo "Invested";
}
else{
	# code...
	echo "Not Invested";
}?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ;&nbsp;&nbsp;&nbsp;&nbsp; <span>Rating : </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>Review : </span></p>

	
</div>
<?php
 }}else
 

 ?>