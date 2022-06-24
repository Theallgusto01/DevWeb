<!DOCTYPE html>
<html lang='pt-br'>
<head>
<meta charset= 'utf-8'>
<title>Operações Aritiméticas</title>
</head>
<body>
<?php
	$n1 = 2;
	$n2 = 3;
	$s = $n1 + $n2;
	echo "A soma de $n1 + $n2 é $s </br>";
	//duas variáveis mais operador
	echo "A soma de $n1 e $n2 = ".($n1 + $n2)."</br>";

	//Demais operações
	echo "A subração de $n1 e $n2 é ".($n1 - $n2);
	echo "</br>A multilicação entre $n1 e $n2 é ".($n1 * $n2);
	echo "</br>A divisão entre $n1 e $n2 é ".($n1 / $n2);
	echo "</br>O módulo entre $n1 e $n2 é ".($n1 % $n2);
?>
</body>
</html>
