<!DOCTYPE htll>
  <html lang= 'pt-br'>
    <head>
      <meta charset= 'utf-8'>
     <title>Novo Documento</title>
    </head>
    <body>


     <?php
        echo "Você é obrigado a votar?<br/>";
        $idade = $_GET["a"];
        echo "Você é obrigado a votar? ".(($idade > 18) && ($idade < 65)?"sim":"não");
     ?>

    </body>
  </html>
