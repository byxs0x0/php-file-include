<meta charset="utf8">
<?php
error_reporting(0);
$file = $_GET["file"];
if($file){
	include($file);
}else{
	echo '<a href="?file=flag.php">tips</a>';
}
?>