<!DOCTYPE htll>
  <html lang= 'pt-br'>
    <head>
      <meta charset= 'utf-8'>
     <title>Novo Documento</title> 
    </head>
    <body>
      

     <?php
	echo "Permitir que o usuário escolha </br> entre somar e multiplicar dois números<br/>";
	
	$a = $_GET["a"];
	$b = $_GET["b"];

	$opcao = $_GET["op"];
	$opcao = $opcao == "s" ? $a + $b : $a * $b;
	echo $opcao; 
     ?>

    </body>
  </html>
