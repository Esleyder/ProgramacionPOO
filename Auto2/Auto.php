<?php

class Auto{
public $placa;
public $color;
public $modelo;

public function __construct($placa,$color,$modelo){
$this->placa=$placa;
$this->color=$color;
$this->modelo=$modelo;
}

public function setPlaca($placa){
$this->placa=$placa;
}

public function setColor($color){
$this->color=$color;
}

public function setModelo($modelo){
$this->modelo=$modelo;
}

public function getPlaca(){
    return $this->placa;
}

public function getColor(){
    return $this->color             ;
}

public function getModelo(){
    return $this->modelo;
}

}
?>