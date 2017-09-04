<script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainerr",
    {
      title:{
        text: "Ecomerce Growth"    
      },
      animationEnabled: true,
      axisY: {
        title: "Reserves(MMbbl)"
      },
      legend: {
        verticalAlign: "bottom",
        horizontalAlign: "center"
      },
      theme: "theme2",
      data: [

      {        
        type: "column",  
        showInLegend: true, 
        legendMarkerColor: "grey",
        legendText: "MMbbl = one million barrels",
        dataPoints: [      			<?php
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
{y: <?php  print("$number"); ?>, label: "<?php print("$name"); ?>"}
<?php
$i++;
}else
{?>

,{y: <?php  print("$number"); ?>, label: "<?php print("$name"); ?>"}
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
  <body>
  <div id="chartContainerr" style="height: 300px; width: 100%;">
    </div>
</body>

