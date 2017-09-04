<!DOCTYPE html>
<html>
<?php
if(isset($_GET['cat']))
{
	$cat=$_GET['cat'];

if ($cat=='C0001') {
	# code....
	$catt="Automobile Market Analysis";
	$cat="SELECT * FROM automobile_market_analysis order by year";
}elseif ($cat=='C0004') {
	# code...
	$catt="E-Commerce Market Analysis";
	$cat="SELECT * FROM ecom_market_analysis order by year";
}elseif ($cat=='C0002') {
	# code...
	$catt="Cabs Market Analysis";
	$cat="SELECT * FROM cabs_market_analysis order by year";
}elseif ($cat=="C0005") {
	# code...
	$catt="Hotel Market Industry";
$cat="SELECT * FROM hotel_market_industry order by year";
}elseif ($cat=='C0006') {
	# code...
	$catt="Mobile Market Analysis";
	$cat="SELECT * FROM mobile_market_analysis order by year";
}elseif ($cat=='C0003') {
	# code...
	$catt="Mobile Market Analysis";
	$cat="SELECT * FROM construction_market_analysis order by year";
}



	?>
<frameset height="200%" cols=50%,50%" border="0">
<frameset rows=50%,*">
  <frame src="magraph1.php?cat=<?php print("$cat"); ?>&catt=<?php print("$catt"); ?>">
  <frame src="magraph2.php?cat=<?php print("$cat"); ?>&catt=<?php print("$catt"); ?>">
  </frameset>
  <frameset rows="50%,*">
  <frame src="magraph3.php?cat=<?php print("$cat"); ?>&catt=<?php print("$catt"); ?>">
  <frame src="rating_graph.php?cat=<?php print("$cat"); ?>&catt=<?php print("$catt"); ?>">
</frameset>
	<?php
}
?>


</html>