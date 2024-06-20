<?php
function triangulo($x, $y, $z)
{
    if (($x + $y > $z) && ($x + $z > $y) && ($z + $y > $x)) {
        if ($x == $y && $y == $z) {

            echo "Equilatero";
        } else if ($x == $y || $x == $z || $y == $z) {
            echo "Isociles";
        } else {
            echo "Escaleno";
        }
    }else{
        echo "Não é triangulo";
    }
}
$x = 10;
$y = 20;
$z = 30;
triangulo($x, $y, $z);

?>