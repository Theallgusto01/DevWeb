<!DOCTYPE htll>
  <html lang= 'pt-br'>
    <head>
      <meta charset= 'utf-8'>
     <title>RESULTADO</title>
    </head>
    <body>


     <?php
        $idade= (date("Y") - $_POST["ano"]);
        echo "Você tem $idade anos!<br/>";

        echo ($idade>=18)?"Pode Dirigir!<br/>":"Não pode dirigir!<br/>";

        if($idade<16){

           echo "Você não pode votar!<br/>";

        }elseif (($idade>=16 && $idade<18) || ($idade>65)){

           echo "Você pode votar, se quiser!<br/>";

        }else{

           echo "Você deve votar!<br/> ";

        }
     ?>

    </body>
  </html>
