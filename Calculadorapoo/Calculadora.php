<?php

Class Calculadora{
private $n1;
private $n2;

public function __construct($n1,$n2){
$this->n1=$n1;
$this->n2=$n2;
}

public function setN1($n1){
$this->n1=$n1;
}

public function setN2($n2){
$this->n2=$n2;
}

public function getN1(){
    return $this->n1;
}

public function getN2(){
    return $this->n2;
}

public function Sumar(){
    return $this->n1+$this->n2;
}

public function Restar(){
    return $this->n1-$this->n2;
}

public function Multiplicar(){
   return $this->n1*$this->n2; 
}

public function Dividir(){
    return $this->n1/$this->n2;
}
}

$c1=new Calculadora(1,1);
 
?>