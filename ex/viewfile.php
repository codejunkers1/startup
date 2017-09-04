<?php
$fname="empty";
if(isset($_POST['textblock']))
{
$fname=$_POST['fname'];
	// Open the text file
	$f = fopen($fname, "w");

	// Write text
	fwrite($f, $_POST["textblock"]); 

	// Close the text file
	fclose($f);

}
if(isset($_POST['direct']))
{
	$fname=$_POST['direct'];
}
if(isset($_GET['direct']))
{
	$fname=$_GET['direct'];
}
?>
<!DOCTYPE html>
<html>
<head>
<link href='logoe.png' rel='icon' type='image/x-icon'/>
	<title>$@! $M@RT Editor 5.1.2</title>
		<script language="Javascript" type="text/javascript" src="edit_area/edit_area_full.js"></script>

</head>
<style type="text/css">
body::-webkit-scrollbar {
    width: 0px;
}
	body{
		margin: 0;
		background-color:#2980B9;color: white;
		font-family:"Comic Sans MS", cursive, sans-serif;
	}
	.btn{
		padding: 5px;
		border: 2px solid red;
		border-radius: 5px;
		background-color: white;
		color: #2980B9;
		font-weight: bold;
		font-size: 15px;
		cursor: pointer;
		margin-left: 30px;
		font-family:"Comic Sans MS", cursive, sans-serif;
	}
	.text{

		padding:5px;
		border: 2px solid green;
		border-radius: 5px;
		background-color: white;
		color: #2980B9;
		font-weight: bold;
		font-size: 15px;
		margin-left: 30px;
		font-family:"Comic Sans MS", cursive, sans-serif;
	}
</style>
<body>

	

<?php
if($fname!="empty")
{
?>
<section style="">
<table width="100%"><td width="40%"><h2 style="padding-left: 30px;font-weight: bold;"><img src="logoe.png" height="30px;">  $@! $M@RT Editor Pro 5.1.2 </h2></td><td width="">
<form method="post" action="viewfile.php">
		Directory to file:<input type="text" class="text" name="direct" placeholder="Ex: index.html">
		<input type="submit" value="Change" class="btn">
	</form></td><td width="">
	<form method="post" action="viewfile.php"><input type="submit" name="" value="Save Changes" class="btn">
</td></table>

<table width="100%">
	<td width="15%" style="background-color: white;height: 530px;position: fixed;overflow: hidden;border-top: 3px solid green; padding-top: 3px;overflow: auto;display:inline-block;padding-left: 10px;">
	<span style="background-color: #CACFD2; color: red;width: 100%;">C:\xampp\htdocs\startup</span>
		<?php
$dir    = 'C:\xampp\htdocs\startup\ex';
$files = scandir($dir);
//print_r($files1);
$result=count($files);
for ($i=0; $i <$result ; $i++) { 
	# code...
	//print_r(trim($files[i]));
$fl=print_r($files[$i],TRUE);
if($fl!="editor.php" && $fl!="editorplus.php" && $f1!="viewfile.php"){
	if(preg_match("/\b.php\b/i", $fl, $match) || preg_match("/\b.html\b/i", $fl, $match) || preg_match("/\b.css\b/i", $fl, $match) ||preg_match("/\b.js\b/i", $fl, $match)){
?>
<a href="viewfile.php?direct=<?php print_r($files[$i]); ?>"><?php print_r($files[$i]); ?></a><br>
<?php
}}}
?>
	</td>
<td width="85%">



<input type="hidden" name="fname" value="<?php print("$fname"); ?>">
<textarea name="textblock" style="width: 96%; height: 525px; padding:10px;margin-left: 10px;border-top: 3px solid red;padding-bottom: 0px;border:1px solid #808B96; font-size: 15px;" disabled>

<?php




$myfile = fopen($fname, "r") or die("Unable to open file!");
// Output one line until end-of-file
$k=0;
while(!feof($myfile)) {
  if($k==0)
  {
  	$k++;
  }else{
  echo fgets($myfile);
}
}
fclose($myfile);
?>
</textarea>
<p align="right" style="padding-right: 30px;font-size:10px;">By : <span style="color: #E67E22;font-weight: bold;"> VENKATA SAI KATEPALLI </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Any Queries: +91 81 4224 14 15</p>
</form>
<?php
}
else{










	?>
	<section style="">
<table width="100%"><td width="40%"><h2 style="padding-left: 30px;font-weight: bold;"><img src="logoe.png" height="30px;">  $@! $M@RT Editor Pro 5.1.2 </h2></td><td width="">
	<form method="post" action="viewfile.php">
		Directory to file:<input type="text" class="text" name="direct" placeholder="Ex: index.html">
		<input type="submit" value="Change" class="btn">
	</form>
</td></table>

<table width="100%">
	<td width="15%" style="background-color: white;height: 530px;position: fixed;overflow: hidden;border-top: 3px solid green; padding-top: 3px;overflow: auto;display:inline-block;padding-left: 10px;">
	<span style="background-color: #CACFD2; color: red;width: 100%;">C:\xampp\htdocs\startup</span>
		<?php
$dir    = 'C:\xampp\htdocs\startup';
$files = scandir($dir);
//print_r($files1);
$result=count($files);
for ($i=0; $i <$result ; $i++) { 
	# code...
	//print_r(trim($files[i]));
//print_r($files[$i]);
$fl=print_r($files[$i],TRUE);
if($fl!="editor.php" && $fl!="editorplus.php" && $f1!="viewfile.php"){
	if(preg_match("/\b.php\b/i", $fl, $match) || preg_match("/\b.html\b/i", $fl, $match) || preg_match("/\b.css\b/i", $fl, $match) ||preg_match("/\b.js\b/i", $fl, $match)){
?>
<a href="viewfile.php?direct=<?php print_r($files[$i]); ?>"><?php print_r($files[$i]); ?></a><br>
<?php
}}}
?>
	</td>
<td width="85%">

<form method="post" action="viewfile.php">
<input type="hidden" name="fname" value="<?php print("$fname"); ?>">
	<textarea name="textblock" id="my_text" style="width: 96%;height: 510px;padding:10px;margin-left: 10px;border-top: 3px solid red;">

	<?php

	echo "Please Select the FILE name in Directory Field !!!!!!";


	?>
	</textarea></form></td></table>
<p align="right" style="padding-right: 30px;font-size:10px;">By : <span style="color: #E67E22;font-weight: bold;"> VENKATA SAI KATEPALLI </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Any Queries: +91 81 4224 14 15</p>
	<?php
}
?>

</body>
</html>
