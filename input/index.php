<meta charset="utf8">
<?php
error_reporting(0);
$file = $_GET["file"];
if($file){
	if ($file!="http://www.baidu.com") echo "tips：flag在当前目录的某个文件中";
	include($file);
}else{
	echo '<a href="?file=http://www.baidu.com">click go baidu</a>';
}
?>