<?php
function get_members(){
    return ['daebeom', 'minjun', 'jeonghun'];
}
 
$members = get_members();
 
for($i = 0; $i < count($members); $i++){
    echo ucfirst($members[$i]).'<br />';
}
 
?>
