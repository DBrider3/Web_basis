<?php
$filename = "readme.txt";
$handle = fopen("$filename", "r");
$contents = fread($handle, filesize($filename));
echo $contents;
fclose($handle);
?>
