<!DOCTYPE HTML>
<html>

<head>  
 <title>Basic HTML5 Column Chart </title>

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
        dataPoints: [      
<?php
$DBconnect = new mysqli("localhost","root","","id1203592_don");

// Check connection

if ($DBconnect->connect_error) {

    die("Connection failed: " . $DBconnect->connect_error);

}

$checkdata="SELECT * FROM beer";

 $query=$DBconnect->query($checkdata);

 if(mysqli_num_rows($query)>0)
 {
 $i==0;
while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

$brand=$row['Brand'];
$share=$row['Market Share'];

if($i==0)
{?>
        {y: <?php  print("$share"); $i=1; ?>, label: "<?php print("$brand"); ?>"}
<?php }else{
?>
        ,{y: <?php  print("$share"); ?>, label: "<?php print("$brand"); ?>"}    
        <?php }}} ?>   
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
  <div id="chartContainerr" style="height: 300px; width: 100%;">
    </div>
  </body>
</html>