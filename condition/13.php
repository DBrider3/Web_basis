<?php
if($_POST['id'] === 'dominic'){
    if($_POST['password'] === '123456'){
        echo 'right';
    } else {
        echo 'password wrong';
    }   
} else {
    echo 'id wrong';
}
?>
