<?php
include_once("Auto.php");

$a1=new Auto("A123","Amarillo","2023");

echo $a1->getPlaca();
echo "<br>";
echo$a1->getColor();
echo "<br>";
echo$a1->getModelo();

?>