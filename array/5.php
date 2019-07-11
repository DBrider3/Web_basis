<?php
function get_members(){
return ['dominic', 'k8805', 'sorialgi'];
}
// php5.4 이상 간단한 버전
echo get_members()[1];
echo "<br />";

// 아닌 버전
$tmp = get_members();
echo $tmp[1];

?>
