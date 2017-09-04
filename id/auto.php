<?php
$DBconnect=new mysqli("localhost","root","","startup");

// Check connection

if ($DBconnect->connect_error) {

    die("Connection failed: " . $DBconnect->connect_error);

}
$lis = array();
$checkdata="SELECT * FROM idea_prototype_names";

 $query=$DBconnect->query($checkdata);

 	if(mysqli_num_rows($query)>0)
 {
 $i=1;
while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

 						$lis[$i]=$row['prototype_name'];
 						
 						echo $lis[$i];
 						$i++;
 					}

	 				   
		
	}
	$DBconnect->close();

	$DBconnect=new mysqli("localhost","root","","startup");

// Check connection

if ($DBconnect->connect_error) {

    die("Connection failed: " . $DBconnect->connect_error);

}

	$checkdata="SELECT * FROM idea_prototype";

 $query=$DBconnect->query($checkdata);

 	if(mysqli_num_rows($query)>0)
 {
 $i=1;
while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

 						?>
 						<h2 style="font-weight: bold;"><?php print("$lis[1]"); ?></h2>
 						<h4><?php print($row['q1']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[2]"); ?></h2>
 						<h4><?php print($row['q2']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[3]"); ?></h2>
 						<h4><?php print($row['q3']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[4]"); ?></h2>
 						<h4><?php print($row['q4']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[5]"); ?></h2>
 						<h4><?php print($row['q5']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[6]"); ?></h2>
 						<h4><?php print($row['q6']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[7]"); ?></h2>
 						<h4><?php print($row['q7']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[8]"); ?></h2>
 						<h4><?php print($row['q8']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[9]"); ?></h2>
 						<h4><?php print($row['q9']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[10]"); ?></h2>
 						<h4><?php print($row['q10']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[11]"); ?></h2>
 						<h4><?php print($row['q11']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[12]"); ?></h2>
 						<h4><?php print($row['q12']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[13]"); ?></h2>
 						<h4><?php print($row['q13']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[14]"); ?></h2>
 						<h4><?php print($row['q14']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[15]"); ?></h2>
 						<h4><?php print($row['q15']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[16]"); ?></h2>
 						<h4><?php print($row['q16']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[17]"); ?></h2>
 						<h4><?php print($row['q17']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[18]"); ?></h2>
 						<h4><?php print($row['q18']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[19]"); ?></h2>
 						<h4><?php print($row['q19']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[20]"); ?></h2>
 						<h4><?php print($row['q20']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[21]"); ?></h2>
 						<h4><?php print($row['q21']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[22]"); ?></h2>
 						<h4><?php print($row['q22']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[23]"); ?></h2>
 						<h4><?php print($row['q23']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[24]"); ?></h2>
 						<h4><?php print($row['q24']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[25]"); ?></h2>
 						<h4><?php print($row['q25']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[26]"); ?></h2>
 						<h4><?php print($row['q26']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[27]"); ?></h2>
 						<h4><?php print($row['q27']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[28]"); ?></h2>
 						<h4><?php print($row['q28']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[29]"); ?></h2>
 						<h4><?php print($row['q29']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[30]"); ?></h2>
 						<h4><?php print($row['q30']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[31]"); ?></h2>
 						<h4><?php print($row['q31']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[32]"); ?></h2>
 						<h4><?php print($row['q32']); ?></h4>
 						<h2 style="font-weight: bold;"><?php print("$lis[33]"); ?></h2>
 						<h4><?php print($row['q33']); ?></h4>
 						
 						<?php
 						
 						$i++;
 						
}
}
?>