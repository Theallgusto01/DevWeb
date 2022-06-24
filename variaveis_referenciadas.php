<!DOCTYPE htll>
  <html lang= 'pt-br'>
    <head>
      <meta charset= 'utf-8'>
     <title>Novo Documento</title> 
    </head>
    <body>
      

     <?php
     #Referências
    //Ao eferenciar ambas as variáveis passam a ser linkadas
	$a = 3;
	$b = &$a;
	$b += 5;
	echo "A variável a vale $a";
	echo "<br>A variável b vale $b";
     ?>

    </body>
  </html>
