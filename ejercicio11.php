<?php
$semana = array("LUNES" => rand(1,99), "MARTES" => rand(1,99), "MIERCOLES" => rand(1,99), "JUEVES" => rand(1,99), "VIERNES" => rand(1,99), "SABADO" => rand(1,99),"DOMINGO" => rand(1,99));
$sum = 0;
foreach($semana as $item => $value){
    echo $item.": ".$value."<br>";
    $sum = $sum + $value;
}

$media = $sum/7;
echo "La suma es ".$sum."<br>";
echo "La media es ".$media;
