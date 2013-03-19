<?php
header("Content-type: text/html; charset=utf-8");
class AulaExtendida extends Aula {
      function lista_profes(){
             print $this->profesor->nombre;
             print $this->profesor->apellidos;
      }

     function lista_profes1(){
             print $this->profesor->nombre;
             print $this->profesor->apellidos;
             print $this->profesor->materia;
      }

     function lista_alumnos(){
         foreach ($this->alumnos as $indice=>$contenido){
             print $contenido->nombre." ".$contenido->apellidos." ".$contenido->ruta."<br>";
         }
     }


     function modifica_alumnos($nom_act='',$ap_act='',$nom_nue='',$ap_nue='', $ruta_nue=''){
        foreach ($this->alumnos as $ind=>$cont){
          if($this->alumnos[$ind]->nombre==$nom_act && $this->alumnos[$ind]->apellidos==$ap_act){
                 if ($nom_nue !='')$this->alumnos[$ind]->nombre=$nom_nue;
                 if ($ap_nue !='')$this->alumnos[$ind]->apellidos=$ap_nue;
                 if ($ruta_nue !='')$this->alumnos[$ind]->ruta=$ruta_nue;
          }
        }
     }

     function borra_alumnos($nom_act='',$ap_act=''){
        foreach ($this->alumnos as $ind=>$cont){
          if($this->alumnos[$ind]->nombre==$nom_act && $this->alumnos[$ind]->apellidos==$ap_act){
                 unset($this->alumnos[$ind]);
          }
        }
        $this->alumnos=array_values($this->alumnos);
     }
}

/****** comienza una porción de código idéntica a la del ejemplo anterior ******/

function __autoload($clase){
  include $clase.'.class.php';
}
$miAula=new AulaExtendida('Primero B');  //instanciamos la clase extendida para usar sus metodos
$miAula->profesor=new Profesores('Juan','López','Matemáticas');
$miAula->materiales[]="Pizarra digital"; //clase Aula
$miAula->puestos=45;
$nombre_alumnos=array('Ana','Benito','Carla','Dionisio','Esther','Fernando','Guiomar');
$apellidos_alumnos=array('Jiménez','Iglesias','Husillos','Gómez','Fernández','Escapa','Díaz');
for ($i=0;$i<sizeof($nombre_alumnos);$i++){
   $miAula->alumnos[]=new Alumnos($nombre_alumnos[$i],$apellidos_alumnos[$i]);
  }

/**** acaba el código idéntifica a la del ejemplo anterior ****/
echo "\$miAula->lista_profes(); <br />";
$miAula->lista_profes();
print "<hr />";
/* lista alumnos */
$miAula->lista_alumnos();
print "<br />";
/* modifica alumnos sin busqueda*/
$miAula->alumnos[2]->nombre="Heliodoro";
$miAula->alumnos[3]->apellidos="de los Ríos";
/* modifica alumnos con busqueda*/
$miAula->modifica_alumnos('Ana','Jiménez','María Gertrudis','Cucalón',48);
/* borra alumnos con búsqueda*/
$miAula->borra_alumnos('Benito','Iglesias');
$miAula->lista_alumnos();
print "<br />";
print "<pre>";
print var_dump($miAula);
print "</pre>";
print "<br><br>";

foreach ($miAula->alumnos[1] as $propiedad=>$valor){
  print $propiedad."....".$valor."<br>";
}
print "<br><br>";
foreach ($miAula->alumnos as $indice=>$objeto){
    foreach ($objeto as $propiedad=>$valor){
        print $indice."...".$propiedad."....".$valor."<br>";
    }
}
echo "<hr />";
$miAula->lista_profes1();
echo "<hr />";
?>