<!DOCTYPE htll>
  <html lang= 'pt-br'>
    <head>
      <meta charset= 'utf-8'>
     <title>Novo Documento</title>
    </head>
    <body>

   <?php
    echo "Situação do Menino</br>";
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $m = ($n1+$n2)/2;
    echo "Valores recebidos $n1 e $n2, média $m<br>";
    #$sit = $m >= 7 ? "aprovado<br/>" : "reprovado<br/>";
    #outra forma de mostrar;
    echo ("a situação do abençoado é: $sit".(($m >= 7) ? "aprovado<br/>" : "reprovado<br/>"));
   ?>

    </body>
  </html>
