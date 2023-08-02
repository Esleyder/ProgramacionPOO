<?php
include_once("Calculadora.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <fieldset>
    <legend>Calculadora Poo</legend>
    <form action="#" method="post">
    <p>Numero 1:<input type="number" name="n1"></p>
    <p>Numero2 :<input type="number" name="n2"></p>
    <p><input type="submit" name="Enviar"></p>   
</form>
     </fieldset>
    <?php
    if($_POST){
    $n1=$_POST['n1'];
    $n2=$_POST['n2'];
    
    $c1->setN1($n1);
    $c1->setN2($n2);
    
    echo $c1->getN1();
    echo "<br>";
    echo $c1->getN2();
    echo "<br>";
    echo "La suma es :".$c1->Sumar();
    echo "<br>";
    echo "La resta es :".$c1->Restar();
    echo "<br>";
    echo "La multiplicacion es :".$c1->Multiplicar();
    echo "<br>";
    echo "La division es :".$c1->Dividir();
    }
    ?>    
    
</body>
</html>