<?php
if(is_file('./deletme.txt')==true){
echo "파일이 삭제 되었습니다.";
unlink('./deletme.txt');
}else{
echo "찾을수 없습니다.";
}
?>
