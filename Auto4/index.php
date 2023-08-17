<?php
require_once("Auto.php");
$lista=array();
$i=0;
$tamaño=2;


while($i<$tamaño){
$p=readline("Ingresa la placa: \n");
$c=readline("Ingresa el color: \n");    
$m=readline("Ingresa el modelo: \n");
$auto=new Auto($p,$c,$m);
$lista[]=$auto;
$i++;
}

foreach($lista as $listas){
echo 
"Placa:".$listas->getPlaca().
"Color:".$listas->getColor().
"Modelo:".$listas->getModelo()."\n";
} 
 
?>