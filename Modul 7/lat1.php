<!DOCTYPE html>
<html>
<head>
	<title>Swap</title>
</head>
<body>
<?php
function swap(&$a, &$b){
	$a = $a + $b;
	$b = $a - $b;
	$a = $a - $b;
}
$x = 1;
$y = 2;
echo "Sebelum swap <br> X = $x <br> Y = $y <br>";
swap ($x, $y);
echo "Setelah swap <br> X = $x <br> Y = $y <br>";
?>
</body>
</html>
