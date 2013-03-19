<?php
class Aula {
     public $identificador;
     public $materiales=array('Pizarra');
     public $puestos=25;
     public $alumnos=array();
     public $profesor;

     function __construct($id){
                $this->identificador=$id;
     }
}
?>