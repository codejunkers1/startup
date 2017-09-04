<!DOCTYPE html>
<html>
<?php
if(isset($_GET['cat']))
{
	$cat=$_GET['cat'];

if ($cat=='AUT') {
	# code...
	$cat="SELECT * FROM automobile_market_analysis order by year";
}elseif ($cat=='ECO') {
	# code...
	//$cat="ecom_market_analysis";
	$cat="SELECT * FROM ecom_market_analysis order by year";
}elseif ($cat=='TAT') {
	# code...
	//$cat="cabs_market_analysis";
	$cat="SELECT * FROM cabs_market_analysis order by year";
}elseif ($cat=='FAC') {
	# code...
	//$cat="hotel_market_industry";
$cat="SELECT * FROM hotel_market_industry order by year";
}elseif ($cat=='MOB') {
	# code...
	//$cat="mobile_market_analysis";
	$cat="SELECT * FROM mobile_market_analysis order by year";
}



	?>
<frameset height="200%" cols=50%,50%" border="0">
<frameset rows=50%,*">
  <frame src="magraph1.php?cat=<?php print("$cat"); ?>">
  <frame src="magraph2.php?cat=<?php print("$cat"); ?>">
  </frameset>
  <frameset rows="50%,*">
  <frame src="magraph3.php?cat=<?php print("$cat"); ?>">
  <frame src="rating_graph.php?cat=<?php print("$cat"); ?>">
</frameset>
	<?php
}
?>


</html>