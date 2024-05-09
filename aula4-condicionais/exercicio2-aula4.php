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
     Qual o nome?:<input type="text" name="nome"></br>
     Qual o peso?:<input type="text" name="peso"></br>
     Qual a altura?:<input type="text" name="altura"></br>
     <input type="submit" value="verificar">

    </form>
</body>
</html>

<?php
   $nome = $_GET['nome'];
   $peso = $_GET['peso'];
   $altura = $_GET['altura'];
   $imc = $peso / ($altura * $altura);
   $imc = number_format($imc, 2);

   echo "seu nome: {$nome} <\br>";
   echo "seu peso: {$peso} <\br>";
   echo "sua altura: {$altura} <\br> ";
   echo "seu IMC: {$imc} <\br> ";

    if( $imc < 16.9){
        echo "muito abaixo do peso";
    }else if($imc >=17 && $imc <= 18.4){
        echo "abaixo do peso";
    }else if($imc >=25 && $imc <= 29.9){
        echo "acima do peso";
    }else if($imc >=30 && $imc <= 34.9){
        echo "Obesidade grau I";
    }else if($imc >=35 && $imc <= 40){
        echo "obesidade grau II";
    }else{
        echo "Obesidade grau III";
    }

?>