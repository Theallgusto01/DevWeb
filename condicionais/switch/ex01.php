<DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="5; ex01.html">
</head>
<body>

    <?php
        $num_1 = $_POST["valor1"];
        $escolha = $_POST["escolha"];

        switch($escolha){

        case 1:
            echo "O dobro de $num_1 é ".($num_1 * 2);
        break;
        case 2:
            echo "O cubo de $num_1 é: ".(pow($num_1, 3));
        break;
        case 3:
            echo "A raiz quadrade de $num_1 é: ".(sqrt($num_1));
        break;
        default:
            echo "Valores inválidos";

}

    ?>

</body>


</html>
