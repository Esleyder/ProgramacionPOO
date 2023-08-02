<?php
include_once("Auto.php");

$auto1=new Auto();

$auto1->setPlaca("ABC-123");
$auto1->setColor("Negro");
$auto1->setModelo("2023");

echo $auto1->getPlaca();
echo "<br>";
echo $auto1->getColor();
echo "<br>";
echo $auto1->getModelo();


?>