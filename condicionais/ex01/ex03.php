<DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $nota_1= $_POST["nota1"];
        $nota_2= $_POST["nota2"];
        $media = (($nota_1 + $nota_2)/2);
        if($media<5){
            echo "Sua média é $media<br/>Situação: REPROVADO!<br/>";
        }elseif($media>=5 && $media<7){
            echo "Sua média é $media<br/>Situação: RECUPERAÇÃO!<br/>";
        }else{
            echo "Sua média é $media<br/>Situação: APROVADO<br/>";
        }
    ?>
    <a href="./ex03.html">VOLTAR!</a>
</body>


</html>
