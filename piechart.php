<!DOCTYPE HTML>

<html>

<head>  
<script type="text/javascript">
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer",
	{
		title:{
			text: "Closed Business Statistics Percentage"
		},
                animationEnabled: true,
		legend:{
			verticalAlign: "center",
			horizontalAlign: "left",
			fontSize: 20,
			fontFamily: "Helvetica"        
		},
		theme: "theme2",
		data: [
		{        
			type: "pie",       
			indexLabelFontFamily: "Garamond",       
			indexLabelFontSize: 20,
			indexLabel: "{label} {y}%",
			startAngle:-20,      
			showInLegend: true,
			toolTipContent:"{legendText} {y}%",
			dataPoints: [
			<?php
$DBconnect = new mysqli("localhost","root","","id1203592_don");

// Check connection

if ($DBconnect->connect_error) {

    die("Connection failed: " . $DBconnect->connect_error);

}




$checkdata="SELECT * FROM closed_business_stats where Percent!=100 order by Percent desc";

 $query=$DBconnect->query($checkdata);

 if(mysqli_num_rows($query)>0)
 {
 $i=0;
while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

$number=$row['Number'];
$name=$row['Business_Closing_Statistics'];
$percent=$row['Percent'];
if($i==0){
	?>
{  y: <?php print("$percent"); ?>, legendText:"<?php print("$name"); ?>", label: "<?php print("$name"); ?>" }
<?php
$i++;
}else
{?>

,{  y: <?php print("$percent"); ?>, legendText:"<?php print("$name"); ?>", label: "<?php print("$name"); ?>" }
<?php
}

}
}
?>

				
				
				
			]
		}
		]
	});
	chart.render();
}
</script>
<script type="text/javascript" src="canvasjs.min.js"></script> 
</head>
<body>
<div id="chartContainer" style="height: 400px; width: 100%;"></div>
</body>
<?php include'closedbarchart.php'; ?>
</html>