<?php
include'investorheader.php';
?>
<section style="padding-top:150px;background-image: url(covertop.jpg);padding-bottom: 100px;">

<style>
p {
    text-align: center;
}

.tab122 {
    display:block;
    padding: 20px;
    border: 1.5px solid #E5E7E9;
    border-radius:9px;
max-width:50%;
margin-bottom: 100px;
box-shadow: 0 0.1em 1em #000;
background-color: #FDFEFE;

}


.button1 {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button {
    background-color: white; 
    color: black; 
    border: 2px solid #ff471a;
    padding: 15px;
}

.button1:hover {
    background-color: #008CBA;
    color: white;
}
    


</style>


<center>

<br>
<?php 
        
$DBconnect = new mysqli("localhost","root","","startup");

// Check connection

if ($DBconnect->connect_error) {

    die("Connection failed: " . $DBconnect->connect_error);

}
$id=$_SESSION['ID'];
$checkdata="SELECT * FROM notification";

 $query=$DBconnect->query($checkdata);

 if(mysqli_num_rows($query)>0)
 {
 
while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

$nid=$row['n_id'];
$name=$row['bythe'];
$time=$row['date'];
$des=$row['Description'];
?>

<div style="background-color:white;width: 60%;padding: 10px;border:0px solid grey;text-orientation: inherit;box-shadow: 0 0.1em 1em grey;text-align: left;">
    <p><span style="color: #2874A6;font-weight: bold;"><?php print("$name"); ?></span><br><span align=right style="color: grey;font-weight: ;font-size: small;"><?php print("$time"); ?></span></p>
    <?php print("$des"); ?>
    <br><br>
    <hr>
    <br>
    <a href="" style="padding:8px;background-color: grey;color: white;font-weight: bold;text-decoration: none;">Respond</a>
    <br><br>
</div>
<br>
<?php
}}

?>
    


    
</div>


    
</section>


</body>

	
</section>