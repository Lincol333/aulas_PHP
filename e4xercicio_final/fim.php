<?php



//dados das pessoas da cidade

$dados= [
     ['salario'=> 1000, 'filhos'=> 2]
     ['salario'=> 2000, 'filhos'=> 3]
     ['salario'=> 3500, 'filhos'=> 1]
     ['salario'=> 300, 'filhos'=> 4]
     ['salario'=> 100, 'filhos'=> 2]
     ['salario'=> 350, 'filhos'=> 1]
     ['salario'=> 250, 'filhos'=> 3]
];
//funcao

function estatistica($dados){
    $somaSalario=0;
    $somaFilhos=0;
    $totalPessoas= count($dados);
    $maiorSalario=0;
    $salariosAte350=0;

    foreach($dados as $p){
        $salario = $p['salario'];
        $filhos = $p['filhos'];
        $somaSalario += $salario;
        $somaFilhos += $filhos;

        if($salario > $maiorSalario){
            $maiorSalario = $salario;
        }
        if($salario <= 350){
            $salariosAte350++;
        }
    }
    $mediaSalario = $somaSalario/$totalPessoas;
    $mediaFilhos = $somaFilhos/$totalPessoas;
    $porcentagemSalario350 = (salariosAte350/totalPessoas) *100;


    echo "Media do salario da populcao: R$". number_format($mediaSalario,2)."\n";
    echo "Mairo salario: R$". number_format($maiorSalario,2)."\n";
    echo "Media numero de filhos:". number_format($mediaFilhos)."\n";
    echo "Porcentagem de pessoas com salario até R$350,00:". number_format($porcentagemSalario350)."\n";
}
//chamar a funcao
estatistica ($dados);

?>