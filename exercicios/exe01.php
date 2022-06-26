<DOCTYPE html>
<html lang="pt-br">

<head> 
    <meta charset="UTF-8">
</head>
<body>
    <h1>Exercícios PHP Progressivo! - 01</h1>
    <form method='get'>
        Insira uma nota: <input type='number' name='nota'>
        <input type='submit'  value='Enviar'>
    </form>
    <?php
    $nota = $_GET["nota"];
    if($nota<1 || $nota>10){
        echo "Insira uma de 0 a 10!";
    }else{
        echo "Nota enviada com sucesso!";
    }
    ?>


</body>
</html>


