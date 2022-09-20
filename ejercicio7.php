<?php
$valores = array();

for($i = 0; $i < 9; $i++){
    
    array_push($valores,rand(1,200));
}

echo "Relacion de numeros aleatorios <br>";

$nums = "";
for($j = 0;$j < count($valores); $j++){
    $nums = $nums." ".$valores[$j];
}

echo $nums;
echo "<br>";
echo "otra forma de visualizar los datos de un array";
echo "<br>";
print_r($valores);
echo "<br>";

$revs = "";

for($z = count($valores); $z >= 0 ; $z--){
    $revs = $revs. " ".$valores[$z];
}

echo "<br>";

echo $revs;

