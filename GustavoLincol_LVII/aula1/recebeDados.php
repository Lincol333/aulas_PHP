<?php 

    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $dataNasc = $_GET['dataNas'];
    $disciplinas = $_GET['disc'];
    $estado = $_GET['estado'];
    $cor = $_GET['cor'];
    $observacao = $_GET['obs'];
    $curso = $_GET['curso'];
    $senha = md5($_GET['senha']);
    echo "<br><pre>";
    var_dump($nome,$email,$dataNasc,$estado,$cor,$observacao,$curso,$senha);
    
    print_r($disciplinas);
?>