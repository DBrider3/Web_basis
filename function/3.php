<?php
function numbering () {
    $i = 0;
    while($i<10){
        echo $i;
        $i += 1;
    }
}

for($i=0;$i<5;$i++){
	numbering();
	echo "<br />";
}
?>
