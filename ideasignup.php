<!DOCTYPE html>
<html>
<head>

<style>
body {font-family: "Lato", sans-serif;}

/* Style the tab content */
#input:focus{
    border-radius: 5px;
    border:2px solid #7F8C8D;
    box-shadow: 0 0em 0.3em #000;
    padding: 10px;
    margin: 10px;
    font-size: 15px;
}
#input{
    border-radius: 5px;
    border:2px solid #7F8C8D;
    padding: 10px;
    margin: 10px;
    width: 70%;
    font-size: 15px;
}
#btn{
    background-color: #229954;
    color: white;
    border-radius: 5px;
    border:2px solid #7F8C8D;
    padding: 10px;
    margin: 10px;
    width: 77%;
    font-size: 15px;
    border:2px solid #229954;
    cursor: pointer;
    font-weight: bold;
}
#btn:hover{
    background-color:white;
    color: #229954;
    border-radius: 5px;
    border:2px solid #7F8C8D;
    padding: 10px;
    margin: 10px;
    width: 77%;
     font-weight: bold;
    font-size: 15px;
    border:2px solid #229954;
}


/* Style the tab content */
.tabcontent {
    display: none;
    padding: 20px;
    border: 1.5px solid black;
    border-radius: 0px 0px 10px 10px;
    
}
</style>
</head>
<body>
<br>
<?php
if(isset($_GET['status']))
{
    $status=$_GET['status'];
    if($status=="email" || $status=="password"){
    ?>
    <h2 align="center" style="color: red;">Invalid Login Details!!!!!</h2>
    <?php
}
else if($status=="alreadyuser")
{
    ?>
    <h2 align="center" style="color: red;">Already Registered with this Email Address !!!!</h2>
    <?php
}
else if($status=="EXPIRED")
{
    ?>
    <h2 align="center" style="color: red;">Logout Sucessfully</h2>
    <?php
}

}


?>
<br>
<center>
<div style="width: 30%;margin: 30px;height: 520pt; border: 2px solid black;border-radius: 15px;padding: 20px;padding-top: 30px;box-shadow: 0 0em 0.3em #000;padding-bottom: 30px;">
<img src="logo2.png" style="width: 90%;"/><br><br>
<br>
<center>



    <div   style="display: block;"><center>
    <h1 style="font-weight: bold;color: #229954;font-size:;">StartUp Signup</h1>
<?php
if (isset($_GET['err'])) {
    # code...
    $err=$_GET['err'];
    if ($err=="alreadyexist") {
        # code...
        ?>
        <p style="color: red;font-weight: bold;">Username Already Exist.Please Try Different !!!</p>
        <?php
    }elseif ($err=="alreadyemailexist") {
        # code...
        ?>
        <p style="color: red;font-weight: bold;">Email Already Exist.Please Try Different !!!</p>
        <?php
    }elseif ($err=="alreadymobileexist") {
        # code...
        ?>
        <p style="color: red;font-weight: bold;">Mobile Already Exist.Please Try Different !!!</p>
        <?php
    }
}?>
<form method="post" action="submitreg.php">
<input type="hidden" name="type" value="IDEA">
 <input id="input"  type="text" name="fname" placeholder="FULL NAME" required><br>
 <input id="input" type="email" name="email" placeholder="EMAIL ADDRESS" required><br>
 <input id="input" type="text" maxlength="10" name="uname" placeholder="USERNAME" required><br>
 <input id="input" type="password" name="password" placeholder="PASSWORD" required><br>
 <input id="input" type="text" name="mobile" placeholder="MOBILE NUMBER" required><br>
 <input id="input" type="text" name="aadhar" placeholder="AADHAR NUMBER" required><br>
  <input type="submit" id="btn" value="Submit"><br>
  <input type="reset" id="btn" value="Reset">
 </form>
 
 <br>
</div>

</div>

</body>
</html> 
