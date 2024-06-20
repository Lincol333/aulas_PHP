<?php

function ordenar($x, $y, $z)
{
    if ($x < $y && $x < $z) {
        echo "{$x}";
        if ($y < $z) {
            echo " {$y} {$z}";
        } else {
            echo " " . $z . " " . $y;
        }
    } else if ($y < $x && $y < $z) {
        echo " " . $y;
        if ($x < $z) {
            echo " " . $x . " " . $z;
        } else {
            echo " " . $z . " " . $x;
        }
    } else {
        echo " " . $z;
        if ($x < $y) {
            echo " " . $x . " " . $y;
        } else {
            echo " " . $y . " " . $x;
        }
    }
}
ordenar(10, 20, 30);


?>