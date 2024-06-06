<?php

$numero = 5;
$res;
$res2;
for ($i = 0; $i <= 10; $i++) {
    $res = $numero * $i;
    echo "{$numero} * {$i} = {$res} <br>";
}

for ($i = 1; $i <= 10; $i++) {
    for ($j = 0; $j <= 10; $j++) {
        $res2 = $i * $j;
        echo "{$i} x {$j} = {$res2} <br>";
    }
    echo"<br>........<br>";
}
?>