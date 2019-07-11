<?php
$fp = fopen('writeme.txt', 'w');
fwrite($fp, '1');
fwrite($fp, '23');
fclose($fp);
?>
