<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        Informe o dia da semana:<br>
        1 para domingo<br>
        2 para segunda<br>
        3 para terça<br>
        4 para quarta<br>
        5 para quinta<br>
        6 para sexta<br>
        7 para sabado<br>
        <input type="text" name="dia"></br>

        <input type="submit" value="verificar">

    </form>
</body>

</html>

<?php
$dia = $_GET['dia'];
switch ($dia) {
    case 1:
        echo "o dia é domingo<br>";
        break;
    case 2:
        echo "o dia é segunda feira<br>";
        break;
    case 3:
        echo "o dia é terça feira<br>";
        break;
    case 4:

        echo "o dia é quarta feira <br>";
        break;
    case 5:
        echo "o dia é quinta feira <br>";
        break;
    case 6:
        echo "o dia é sexta feira <br>";
        break;
    case 7:
        echo "o dia é domingo <br>";

    default:
        echo "numero invalido <br>";
}

?>