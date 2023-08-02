<?php

class Persona{
protected $id;
protected $nombre;
protected $correo;
protected $comentario;
protected $sexo;
protected $boletin;

public function __construct($id,$nombre,$correo,$comentario,$sexo,$boletin){
$this->id=$id;
$this->nombre=$nombre;
$this->correo=$correo;
$this->comentario=$comentario;
$this->sexo=$sexo;
$this->boletin=$boletin;
}

public function setId($id){
$this->id=$id;
}

public function setNombre($nombre){
$this->nombre=$nombre;
}

public function setCorreo($correo){
$this->correo=$correo;
}

public function setComentario($comentario){
$this->comentario=$comentario;
}

public function setSexo($sexo){
$this->sexo=$sexo;
}

public function getId(){
    return $this->id;
}

public function getNombre(){
    return $this->nombre;
}

public function getCorreo(){
    return $this->correo;
}

public function getComentario(){
    return $this->comentario;
}

public function getSexo(){
    return $this->sexo;
}

public function setBoletin($boletin){
$this->boletin=$boletin;
}

public function getBoletin(){
return $this->boletin;
}

}
?>