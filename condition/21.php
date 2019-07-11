<?php
if(
    ($_POST['id'] === 'dominic' or $_POST['id'] === 'k8805' or $_POST['id'] === 'sorialgi')
    and
    $_POST['password'] === '123456'
){
    echo 'right';
} else {
    echo 'wrong';
}
?>
