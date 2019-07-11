<html>
<body>
<?php
$a = 100;
echo gettype($a);

echo "<br />";
echo var_dump($a);

settype($a, 'double');
echo '<br />';
echo gettype($a);
?>
</body>
</html>


