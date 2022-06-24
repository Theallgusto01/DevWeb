<!DOCTYPE htll>
  <html lang= 'pt-br'>
    <head>
      <meta charset= 'utf-8'>
     <title>Novo Documento</title>
    </head>
    <body>

     <?php
        echo "Mostra Sittuação do Indivíduo</br>";
        $nota1 = $_GET["a"];
        $nota2 = $_GET["b"];
        $m = ($nota1+$nota2)/2;
        echo gettype($nota1);
        echo gettype($nota2);
        echo gettype($m);
     ?>
   </body>
  </html>
