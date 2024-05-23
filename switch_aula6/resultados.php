<?php
$estadoCivil = $_GET['estadoCivil'];
$nome = $_GET['nome'];

switch ($estadoCivil) {
    case 1:
        $estadoCivil = "solteiro";
        break;
    case 2:
        $estadoCivil = "casado";
        break;
    case 3:
        $estadoCivil = "divorciado";
        break;
    case 4:
        $estadoCivil = "viúvo";
        break;
    case 5:
        $estadoCivil = "União Estavel";
        break;


}

echo "O estado civil do ".$nome." é ".$estadoCivil;

?>