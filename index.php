<?php

function suma($a, $b){
    return $a + $b;
}

function resta($a, $b){
    return $a - $b;
}

function multi($a, $b){
    return $a * $b;
}

function division($a, $b){
    return $a / $b;
}

function potencia($a, $b){
    $res = 1;
    for($i=0; $i<=$b; $i++)
        $res=$res*$a;
}

?>