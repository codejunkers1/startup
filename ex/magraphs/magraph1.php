<?php
if (isset($_GET['cat'])) {
	# code...

$cat=$_GET['cat'];
}
else
	$cat="SELECT * FROM automobile_market_analysis order by year";
 ?>
	<script type="text/javascript">
	window.onload = function () {
		var chart = new CanvasJS.Chart("chartContainer",
		{
			theme: "theme3",
                        animationEnabled: true,
			title:{
				text: "Automobile_market_analysis",
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
				name: "Companies_in_profits",
				legendText: "Companies_in_profits",
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
$newbusinesses=$row['companies_in_profits'];

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
				name: "no_profits_no_loss",
				legendText: "no_profits_no_loss",
				axisYType: "secondary",
				showInLegend: true,
				dataPoints:[<?php
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
//$newbusinesses=$row['New_Businesses'];
$closedbusinesses=$row['no_profit_no_loss'];
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
				name: "Companies_in_loss",
				legendText: "Companies_in_loss",
				axisYType: "secondary",
				showInLegend: true,
				dataPoints:[<?php
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
//$newbusinesses=$row['New_Businesses'];
//$closedbusinesses=$row['Closed_Businesses'];
$bankruptices=$row['companies_in_loss'];
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
