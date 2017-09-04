<?php
function generate_id($opt)
{ $res='';
	 switch ($opt) {
	 	case 1:$res=generate_u_id();return "$res";
	 		# code...
	 		break;
	 	case 2:$res=generate_i_id();return "$res";
	 		# code...
	 		break;
	 	case 3:$res=generate_r_id();return "$res";
	 		# code...
	 		break;

	 	default:echo 'wrong input';
	 		# code...
	 		break;
	 }
}
function generate_u_id()
{ 
	$DBconnect = new mysqli("localhost","root","","startup");

// Check connection

if ($DBconnect->connect_error) {

    die("Connection failed: " . $DBconnect->connect_error);

}

$checkdata="SELECT * FROM user_info" ;

 $query=$DBconnect->query($checkdata);

 if(mysqli_num_rows($query)>=0)
 {$p2=''.(mysqli_num_rows($query)+1);
  while(strlen($p2)<9)
  {
  	$p2='0'.$p2;

  }
  return ('U'.$p2);


 }
 

}
function generate_i_id()
{ //echo "tokka";
$DBconnect = new mysqli("localhost","root","","startup");
// echo "tokka";
// Check connection

if ($DBconnect->connect_error) {

    die("Connection failed: " . $DBconnect->connect_error);

}

$checkdata="SELECT * FROM idea" ;

 $query=$DBconnect->query($checkdata);
 //echo "tokka";
 if(mysqli_num_rows($query)>=0)
 {$p2=''.(mysqli_num_rows($query)+1);
  while(strlen($p2)<9)
  {
  	$p2='0'.$p2;
  	//echo $p2;

  }
  return ('I'.$p2);


 }

}

function generate_r_id()
{
$DBconnect = new mysqli("localhost","root","","startup");

// Check connection

if ($DBconnect->connect_error) {

    die("Connection failed: " . $DBconnect->connect_error);

}

$checkdata="SELECT * FROM review" ;

 $query=$DBconnect->query($checkdata);

 if(mysqli_num_rows($query)>=0)
 {$p2=''.(mysqli_num_rows($query)+1);
  while(strlen($p2)<9)
  {
  	$p2='0'.$p2;

  }
  return ('R'.$p2);


 }

}

generate_id(2);

?>
