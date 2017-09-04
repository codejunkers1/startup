<section> 
	<script type="text/javascript">
	window.onload = function () {
		var chart = new CanvasJS.Chart("chartContainer",
		{
			theme: "theme3",
                        animationEnabled: true,
			title:{
				text: "New Business Statistics 2005 - 2014",
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
				name: "New Startups Statistics(million/year)",
				legendText: "New Businesses",
				showInLegend: true, 
				dataPoints:[
<?php
$DBconnect = new mysqli("localhost","root","","id1203592_don");

// Check connection

if ($DBconnect->connect_error) {

    die("Connection failed: " . $DBconnect->connect_error);

}




$checkdata="SELECT * FROM new_business_stats order by Year";

 $query=$DBconnect->query($checkdata);

 if(mysqli_num_rows($query)>0)
 {
 $i=0;
while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

$year=$row['Year'];
$newbusinesses=$row['New_Businesses'];
$closedbusinesses=$row['Closed_Businesses'];
$bankruptices=$row['Bankruptcies'];
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
				name: "New Startups Statistics(million/year)",
				legendText: "Closed Businesses",
				axisYType: "secondary",
				showInLegend: true,
				dataPoints:[<?php
$DBconnect = new mysqli("localhost","root","","id1203592_don");

// Check connection

if ($DBconnect->connect_error) {

    die("Connection failed: " . $DBconnect->connect_error);

}




$checkdata="SELECT * FROM new_business_stats order by Year";

 $query=$DBconnect->query($checkdata);

 if(mysqli_num_rows($query)>0)
 {
 $i=0;
while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

$year=$row['Year'];
$newbusinesses=$row['New_Businesses'];
$closedbusinesses=$row['Closed_Businesses'];
$bankruptices=$row['Bankruptcies'];
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
				name: "New Startups Statistics(million/year)",
				legendText: "Bankruptcies",
				axisYType: "secondary",
				showInLegend: true,
				dataPoints:[<?php
$DBconnect = new mysqli("localhost","root","","id1203592_don");

// Check connection

if ($DBconnect->connect_error) {

    die("Connection failed: " . $DBconnect->connect_error);

}




$checkdata="SELECT * FROM new_business_stats order by Year";

 $query=$DBconnect->query($checkdata);

 if(mysqli_num_rows($query)>0)
 {
 $i=0;
while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

$year=$row['Year'];
$newbusinesses=$row['New_Businesses'];
$closedbusinesses=$row['Closed_Businesses'];
$bankruptices=$row['Bankruptcies'];
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
	</section>