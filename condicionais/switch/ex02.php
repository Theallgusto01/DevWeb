<DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="5, ex02.html">

</head>
<body>

    <?php

        $dia = $_POST["dia"];
        switch($dia){

        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo "Trabalho!";
        break;
        case 6:
            echo "Trabalho, mas só ate as 13hrs";
        break;
        case 7:
            echo "Não Trabalho";
        break;
        default:
            echo "Digite um dia válido!";



}

    ?>


</body>


</html>
