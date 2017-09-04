<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1">
	<th>YEAR</th>
	<th>NEW BUSINESS</th>
	<th>CLOSED BUSINESS</th>
	<th>BANKRUPTICES</th>
	<TR>
		<?php
$DBconnect = new mysqli("localhost","root","","id1203592_don");

// Check connection

if ($DBconnect->connect_error) {

    die("Connection failed: " . $DBconnect->connect_error);

}

$checkdata="SELECT * FROM new_business_stats" ;

 $query=$DBconnect->query($checkdata);

 if(mysqli_num_rows($query)>0)
 {
 
while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

$year=$row['Year'];
$newbusinesses=$row['New_Businesses'];
$closedbusinesses=$row['Closed_Businesses'];
$bankruptices=$row['Bankruptcies'];

?>
<tr><td><?php print("$year"); ?></td><td><?php print("$newbusinesses"); ?></td><td><?php print("$closedbusinesses"); ?></td><td><?php print("$bankruptices"); ?></td></tr>



<?php




}}


?>



	

</table>

</body>
</html>