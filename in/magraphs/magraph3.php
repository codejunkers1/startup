<?php
if (isset($_GET['cat'])) {
	# code...

$cat=$_GET['cat'];
$catt=$_GET['catt'];
}
else
	$cat="SELECT * FROM automobile_market_analysis order by year";
 ?>
	<script type="text/javascript">
	window.onload = function () {
		var chart = new CanvasJS.Chart("chartContainer",
		{
			theme: "theme2",
                        animationEnabled: true,
			title:{
				text: "<?php print("$catt"); ?>",
				fontSize: 30
			},
			toolTip: {
				shared: true
			},			
			axisY: {
				title: ""
			},
			axisY2: {
				title: ""
			},			
			data: [ 
			{
				type: "column",	
				name: "Startups",
				legendText: "Startups",
				showInLegend: true, 
				dataPoints:[
<?php
$DBconnect = new mysqli("localhost","root","","market_analysis");

// Check connection

if ($DBconnect->connect_error) {

    die("Connection failed: " . $DBconnect->connect_error);

}




$checkdata=$cat;

 $query=$DBconnect->query($checkdata);

 if(mysqli_num_rows($query)>0)
 {
 $i=0;
while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

$year=$row['year'];
$newbusinesses=$row['total_startups'];

if($i==0){
	?>
{label: <?php print("$year"); ?>, y: <?php print("$newbusinesses"); ?>}
<?php
$i++;
}else
{?>

,{label: <?php print("$year"); ?>, y: <?php print("$newbusinesses"); ?>}
<?php
}

}
}
?>


				]
			},
			{
				type: "column",	
				name: "total_shutdowns",
				legendText: "total_shutdowns",
				axisYType: "secondary",
				showInLegend: true,
				dataPoints:[<?php
$DBconnect = new mysqli("localhost","root","","market_analysis");

// Check connection

if ($DBconnect->connect_error) {

    die("Connection failed: " . $DBconnect->connect_error);

}




//$checkdata="SELECT * FROM '.$cat.' order by year";

 $query=$DBconnect->query($checkdata);

 if(mysqli_num_rows($query)>0)
 {
 $i=0;
while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

$year=$row['year'];
//$newbusinesses=$row['New_Businesses'];
$closedbusinesses=$row['total_shutdowns'];
//$bankruptices=$row['Bankruptcies'];
if($i==0){
	?>
{label: <?php print("$year"); ?>, y: <?php print("$closedbusinesses"); ?>}
<?php
$i++;
}else
{?>

,{label: <?php print("$year"); ?>, y: <?php print("$newbusinesses"); ?>}
<?php
}

}
}
?>


				]
			},{
				type: "column",	
				name: "total_bankrupts",
				legendText: "total_bankrupts",
				axisYType: "secondary",
				showInLegend: true,
				dataPoints:[<?php
$DBconnect = new mysqli("localhost","root","","market_analysis");

// Check connection

if ($DBconnect->connect_error) {

    die("Connection failed: " . $DBconnect->connect_error);

}




//$checkdata="SELECT * FROM '.$cat.' order by year";

 $query=$DBconnect->query($checkdata);

 if(mysqli_num_rows($query)>0)
 {
 $i=0;
while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

$year=$row['year'];
//$newbusinesses=$row['New_Businesses'];
//$closedbusinesses=$row['Closed_Businesses'];
$bankruptices=$row['total_bankrupts'];
if($i==0){
	?>
{label: <?php print("$year"); ?>, y: <?php print("$bankruptices"); ?>}
<?php
$i++;
}else
{?>

,{label: <?php print("$year"); ?>, y: <?php print("$bankruptices"); ?>}
<?php
}

}
}
?>


				]
			}
			
			],
          legend:{
            cursor:"pointer",
            itemclick: function(e){
              if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
              	e.dataSeries.visible = false;
              }
              else {
                e.dataSeries.visible = true;
              }
            	chart.render();
            }
          },
        });

chart.render();
}
</script>
  <script type="text/javascript" src="canvasjs.min.js"></script>

	<div id="chartContainer" style="height: 300px; width: 100%;">
	</div>
