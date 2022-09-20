<?php
$valores = array();

for($i = 0; $i < 99; $i++){
    
    array_push($valores,rand(1,100));
}

$sum = 0;

for($j = 0; $j < count($valores); $j++){
    
    $sum = $sum +$valores[$j];
}

$media = $sum/100;

echo "la media es ".$media;