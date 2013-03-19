<?php
class Alumnos {
   public $nombre;
   public $apellidos;
   public $ruta=13;

  function  __construct($nombre='',$apellidos=''){
    $this->nombre=$nombre;
    $this->apellidos=$apellidos;
  }
}
?>