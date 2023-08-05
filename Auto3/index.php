<?php
include_once("Auto.php");

$lista=array();

$cant=intval(readline("Cuantos vehiculos va a ingresar\n"));
$i=0;

while($i<$cant){
$p=readline("Ingresa la placa \n");
$c=readline("Ingresa el color \n");
$m=readline("Ingresa el modelo \n");
$auto=new Auto($p,$c,$m);
$lista[]=$auto;
$i++;
}

//var_dump($lista);

foreach($lista as $listas){

echo "Placa: ".$listas->getPlaca()."Color:".$listas->getColor()."Modelo:".$listas->getModelo()."\n";

}
?>