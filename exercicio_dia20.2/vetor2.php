<?php
//matriz - array associativo
$dados = array(
    array("Nome" => "Joao", "idade" => 10),
    array("Nome" => "Pedro", "idade" => 20),
    array("Nome" => "Maria", "idade" => 50),
    array("Nome" => "Lucas", "idade" => 2),
);

foreach($dados as $d){
    echo "\nNome:".$d['Nome']. "Idade: ". $d['idade'];
}

?>