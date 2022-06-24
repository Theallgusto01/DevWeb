<!DOCTYPE htll>
  <html lang= 'pt-br'>
    <head>
      <meta charset= 'utf-8'>
     <title>Novo Documento</title> 
    </head>
    <body>
      

     <?php
     	$preco = $_GET["a"];
	echo "O preço recebido foi R$ ".(number_format($preco, 2));
	$preco += $preco*(10/100);
	echo "<br/>O preço com reajuste é R$ ".(number_format($preco, 2));
	$preco -= $preco*(10/100);
	echo "<br/>O preço com desconto R$ ".(number_format($preco, 2));
	
     ?>

    </body>
  </html>
