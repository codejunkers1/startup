<?php  

function improvements_to_be_made($res_arr,$exp_years,$full_time,$lifecycle_stage,$ip_involved,$nature_of_startup,$funding_source,$scale_up){
	$changes = False;
	echo "<br> Recommendations:<br>";
	
	if($res_arr[0] != $exp_years){
		echo 'Experience years: '.$exp_years;
		echo'<br>';
		$changes = True;
	}
	//echo "<br><br>".$arg2."---------- ".$type_of_funds."<br><br>";
	if($res_arr[1] != $full_time){
		echo 'Full time: '.$full_time;
		echo'<br>';
		$changes = True;
	}
	if($res_arr[2] != $lifecycle_stage){
		echo 'Life cycle stage: '.$lifecycle_stage;
		echo'<br>';
		$changes = True;
	}
	if($res_arr[3] != $ip_involved){
		echo 'IP Involvement: '.$ip_involved;
		echo'<br>';
		$changes = True;
	}
	if($res_arr[4] != $nature_of_startup){
		echo 'Nature of startup: '.$nature_of_startup;
		echo'<br>';
		$changes = True;
	}
	if($res_arr[5] != $funding_source){
		echo 'Funding source: '.$funding_source;
		echo'<br>';
		$changes = True;
	}
	if($res_arr[6] != $scale_up){
		echo 'Scale up: '.$scale_up;
		echo'<br>';
		$changes = True;
	}
	if(!$changes){
		echo 'All is well & you can happily proceed to set implement your idea for business'."<br><br><br>";
	}
	echo"<br><br><br>";
}

 function q_analysis($exp_years,$full_time,$category,$lifecycle_stage,$ip_involved,$nature_of_startup,$funding_source,$scale_up)
 {  
	$result=0.0;
 	$occ_count=0;
 	$support=4;
 	$max_r=-1;
 	$sno=-1;
 	$DBconnect = new mysqli("localhost","root","","startup");
 	$max_match_cnt = 0;
 	$res_arr = array();

// Check connection

	if ($DBconnect->connect_error) 
	{

   		 die("Connection failed: " . $DBconnect->connect_error);

	}

	$checkdata="SELECT * FROM analysis_info where category='".$category."'" ;

 	$query=$DBconnect->query($checkdata);

 	if(mysqli_num_rows($query)>0)
    {
 
      	while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
		{

 
   			  	 $match_count=0;

					if($exp_years==$row['exp_years'])$match_count++;
					if($full_time=$row['full_time'])$match_count++;
					if($lifecycle_stage==$row['lifecycle_stage'])$match_count++;
					if($ip_involved==$row['ip_involved'])$match_count++;
					if($nature_of_startup==$row['Nature of startup'])$match_count++;
					if($funding_source==$row['funding_source'])$match_count++;
					if($scale_up==$row['scale_up'])$match_count++;
                    if($row['Rating']>$max_r)
                    {
                    	$max_r=$row['Rating'];
						$res_arr = array();
						array_push($res_arr, $row['exp_years']);
						array_push($res_arr, $row['full_time']);
						array_push($res_arr, $row['lifecycle_stage']);
						array_push($res_arr, $row['ip_involved']);
						array_push($res_arr, $row['Nature of startup']);
						array_push($res_arr, $row['funding_source']);
						array_push($res_arr, $row['scale_up']);
                        #$arg1 =  $row['Willing to hire professional'];
                        #arg2 =  $row['Type of funding'];
                        #$arg3 =   $row['Target market'];
                        #echo "hai"."<br>";
						$max_match_cnt = 0;
                    }

                    if($row['Rating']==$max_r)
                    {
                    	if($max_match_cnt < $match_count){
                        $res_arr = array();
						array_push($res_arr, $row['exp_years']);
						array_push($res_arr, $row['full_time']);
						array_push($res_arr, $row['lifecycle_stage']);
						array_push($res_arr, $row['ip_involved']);
						array_push($res_arr, $row['Nature of startup']);
						array_push($res_arr, $row['funding_source']);
						array_push($res_arr, $row['scale_up']);
                        	$max_match_cnt = $match_count;
                    	}
                    	
                    }
					


					if($match_count>=$support)
					{
						//foreach ($row as $key => $value) {
							# code...

						//	echo $value."    ";
						//}
						//echo "<br>";
						

						$result+=($row['Rating']*$match_count);
     				    $occ_count+=$match_count;

					}

 
}

}

improvements_to_be_made($res_arr,$exp_years,$full_time,$lifecycle_stage,$ip_involved,$nature_of_startup,$funding_source,$scale_up);
return ($result/$occ_count);
}
 ?>