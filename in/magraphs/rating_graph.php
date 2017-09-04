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
			zoomEnabled: false,
                        animationEnabled: true,
			title:{
				text: "<?php print("$catt"); ?>"
			},
			axisY2:{
				valueFormatString:"0",
				
				maximum: 10,
				interval: 0,
				interlacedColor: "#F5F5F5",
				gridColor: "#D7D7D7",      
	 			tickColor: "#D7D7D7"								
			},
                        theme: "theme2",
                        toolTip:{
                                shared: true
                        },
			legend:{
				verticalAlign: "bottom",
				horizontalAlign: "center",
				fontSize: 15,
				fontFamily: "Lucida Sans Unicode"

			},
			data: [
			{        
				type: "line",
				lineThickness:3,
				axisYType:"secondary",
				showInLegend: true,           
				name: "Ecomerce", 
				dataPoints: [

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
$rating=$row['annual_rating'];

if ($i==0) {
	?>
	{ x: new Date(<?php print("$year"); ?>, 0), y: <?php print("$rating"); ?> }
	<?php
	$i++;
}else
{
	?>
	,{ x: new Date(<?php print("$year"); ?>, 0), y: <?php print("$rating"); ?> }
	<?php
}







}}else
printf("Errormessage: %s\n", $DBconnect->error);
?>
				

				]
			}
			



			],
          legend: {
            cursor:"pointer",
            itemclick : function(e) {
              if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
              e.dataSeries.visible = false;
              }
              else {
                e.dataSeries.visible = true;
              }
              chart.render();
            }
          }
        });

chart.render();
}
</script>
  <script type="text/javascript" src="canvasjs.min.js"></script>
</head>
<body>
	<div id="chartContainer" style="height: 300px; width: 100%;">
	</div>
