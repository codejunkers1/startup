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





</style>
</head>
<body>
<br>

<br>
<center>
<div style="width: 30%;margin: 30px; border: 2px solid black;border-radius: 15px;padding: 20px;padding-top: 30px;box-shadow: 0 0em 0.3em #000;">
<a href="index.php"><img src="logo2.png" style="width: 90%;" /></a><br><br>
<br>
<center>



<div><center>
<h1>Login Details</h1>
   <br>
   <?php
if(isset($_GET['err']))
{
    $status=$_GET['err'];
    if($status=="email" || $status=="password"){
    ?>
    <p align="center" style="color: red;font-weight: bold;">Invalid Login Details!!!!!</p>
    <?php
}
else if($status=="alreadyexist")
{
    ?>
    <p align="center" style="color: red;font-weight: bold;">Already Registered Login Please !!!!</p>
    <?php
}
else if($status=="EXPIRED")
{
    ?>
    <p align="center" style="color: red;font-weight: bold;">Session Expired Please Login !!!</p>
    <?php
}

}elseif (isset($_GET['status'])) {
    # code...
    $status=$_GET['status'];
    if ($status=='rsucess') {
        # code...?>
        <p align="center" style="color:green;font-weight: bold;">Registration Sucessfully Completed !!!</p>
        <?php
    }
    else if($status=="LOGOUT")
{
    ?>
    <p align="center" style="color: red;font-weight: bold;">Logouted Sucessfully !!!</p>
    <?php
}
}


?>
  <form method="post" action="validate.php">
 <input id="input" type="text" name="uname" placeholder="USERNAME" required><br>
 <input id="input" type="password" name="password" placeholder="PASSWORD" required><br>
 <input type="submit" id="btn" value="Login">
 </form>
  <br>

</div>

</div>

   
     
</body>
</html> 
