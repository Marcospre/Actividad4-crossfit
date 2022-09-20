<?php
$numeros = array(1,2,3,4,5,6,7,8,9);

$max = $numeros[0];

for($i = 1; $i < count($numeros); $i++){
    if($numeros[$i]>$max){
        $max = $numeros[$i];
    }
}

echo "el numero mayo es ".$max;