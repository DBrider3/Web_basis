<?php
$filename = 'writeme.txt';
if (is_writable($filename)) {
echo '이 파일을 쓸 수 있습니다.';
} else {
echo '이 파일을 쓸 수 없습니다.';
}
?>
