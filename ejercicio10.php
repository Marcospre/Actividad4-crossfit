<?php
$meses = array("ENERO" => 31,"FEBRERO" => 28,"MARZO" => 31, "ABRIL" => 30, "MAYO" => 31, "JUNIO" => 30, "JULIO" => 31, "AGOSTO" => 31, "SEPTIEMBRE" => 30, "OCTUBRE" => 31, "NOVIEMBRE" => 30, "DICIEMBRE" => 31);

foreach ($meses as $item => $value ){
    echo $item.": ".$value."<br>";
}