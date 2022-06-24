<!DOCTYPE htll>
  <html lang= 'pt-br'>
    <head>
      <meta charset= 'utf-8'>
     <title>Novo Documento</title>
    </head>
    <body>


     <?php
        echo "<h1>Calculadora de Raíz quadrada! </h1>";
        $numero=$_GET["numero"];
        echo "A raiz quadrada é: ".(number_format(sqrt($numero),2)); 
     ?>
    <a href="forms.php">voltar</a>

    </body>
  </html>
