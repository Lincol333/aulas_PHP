<?php
//logicos e (ee), ou (||), não (!)
$res= ((10 <= 5) || (10 == 20)) && (5 ==5);

$res2= !$res;

var_dump($res2);
?>