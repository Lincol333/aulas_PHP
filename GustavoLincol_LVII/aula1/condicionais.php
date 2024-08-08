<?php

$nome = "maria";
$idade = 12;

if ($idade >= 18 && $idade < 70) {
echo "{$nome} voto obrigatorio";
}else if ($idade < 16){
echo "{$nome} não vota";
if($idade < 12){
echo "".$nome." é criança";
}else{
echo "".$nome." adolescente";
}
}else{
echo "{$nome} voto facultativo";
}


?>