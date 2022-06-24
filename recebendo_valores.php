<!DOCTYPE html>
<html>
<head>
<meta charset= "utf-8";
</head>
<body>

<?php
	//url = "localhost/estudos/recebendo_valores.php?a=valor&b=valor2"
	$v1 = $_GET["a"];
	$v2 = $_GET["b"];

	echo "A soma entre $v1 e $v2 é ".($v1 + $v2);
?>

</body>
</html>
