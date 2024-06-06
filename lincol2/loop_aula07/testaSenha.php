<?php

$senha = $_POST['senha'];
$login = $_POST['login'];

//echo "{$senha}<br>";//debugar
//echo "{$login}<br>";

while(($senha != 123)&& ($login !='lincol')){
    header('Location: login.php');
}

echo "bem vindo ao sistema";

?>