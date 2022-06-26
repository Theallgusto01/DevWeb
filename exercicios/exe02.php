<DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

</head>
<body>
    <h1>Exercícios PHP Progressivo! - 01</h1>
    <form method="post">
        Digite seu Login:<input type="text" size="10" name="login"><br/>
        Digite sua Senha:<input type="password" size="10" name="senha">
     <input type="submit" value="Entrar!">
    </form>
    <?php
      $login=$_POST["login"];
      $senha=$_POST["senha"];
      if($login==$senha){
        echo "O login não pode ser o mesmo que a senha!";
      }else{
        echo "Sucesso!";
      }

    ?>

</body>
</html>

