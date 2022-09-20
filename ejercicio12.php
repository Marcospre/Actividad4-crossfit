<?php
$nombres = array(
    "jordi" => "Jordi Rubio",
    "marta" => "Marta Fabra",
    "eva" => "Eva Palacio",
    "toni" => "Antonio Comas",
    "emilio" => "Emilio Morales",
    "foo" => "Francisco Cascales"
);

ksort($nombres);

echo "Ordenacion por clave<br>";
echo"<br>";
foreach ($nombres as $key => $value){
    echo $key.": ".$value." <br>";
}
echo"<br>";
natsort($nombres);

echo "Ordenacion natural<br>";
echo"<br>";
foreach($nombres as $k => $v){
    echo $k.": ".$v."<br>";
}


