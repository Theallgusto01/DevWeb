<!DOCTYPE html>
<html>

<head>
<meta charset= "utf-8">

</head>

<body>
<?php
	$v1 = $_GET["x"];
	$v2 = $_GET["y"];
	echo "<h2>Valores Recebidos: $v1 e $v2</h2>";
	echo "O valor absoluto de $v2 e ".abs($v2); //valor absoluto mostra o valor positivo
	echo "</br>O valor de $v1<sup>$v2</sup> e ". pow($v1, $v2);
?>
</body>
</html>
