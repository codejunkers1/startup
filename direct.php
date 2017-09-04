<?php
$dir    = 'C:\xampp\htdocs\startup';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);

print_r($files1);
?>
<br>
<?php
//print_r($files2);
?>