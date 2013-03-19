<?php
class Profesores {
   public $nombre;
   public $apellidos;
   public $materia;

  function  __construct($nombre='',$apellidos='',$materia=''){
    $this->nombre=$nombre;
    $this->apellidos=$apellidos;
    $this->materia=$materia;
  }
}
?>