<?php
$filename = 'readme.txt';
if (is_readable($filename)) {
echo '이 파일을 읽을 수 있습니다.';
} else {
echo '이 파일을 읽을 수 없습니다.';
}
?>
