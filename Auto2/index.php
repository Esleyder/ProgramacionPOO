<?php
include_once("Auto.php");

$a1=new Auto();

$a1->setPlaca("A123");
$a1->setColor("Amarillo");
$a1->setModelo("2023");

echo $a1->getPlaca();
echo "<br>";
echo$a1->getColor();
echo "<br>";
echo$a1->getModelo();

?>