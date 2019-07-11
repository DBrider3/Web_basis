<?php
$filename = 'readme.txt';
if (file_exists($filename)) {
echo "파일 $filename 가 존재합니다.";
} else {
echo "파일 $filename 가 존재하지 않습니다.";
}
?>
