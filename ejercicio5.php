<?php
$valores = array();

for($i = 0; $i < 99; $i++){
    
    array_push($valores,rand(1,100));
}

$min = $valores[0];

for($j = 1; $j < count($valores); $j++){
    if($valores[$j] < $min){
        $min = $valores[$j];
    }
}

echo "El valor minimo es ".$min;