<?php
$productos=array("zapato","zapatillas","chanclas","sandalias","zapatillas de casa");
$precios=array(4,3,5,6,7);
$rebaja=0.2;

for($i = 0;$i < count($productos);$i++){
    echo $productos[$i].": ".$precios[$i]." € rebaja: ".$precios[$i]*(1-$rebaja)."<br>";
}