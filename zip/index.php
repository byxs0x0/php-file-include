<meta charset="utf8">
<?php
error_reporting(0);
$file = $_GET["file"];
if (!$file) echo '<a href="?file=upload">upload?</a>';
if(stristr($file,"input")||stristr($file, "filter")||stristr($file,"data")){
	echo "hick?";
	exit();
}else{
	include($file.".php");
}
?>
<!-- flag在当前目录的某个文件中 -->