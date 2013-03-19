<?php
header("Content-type: text/html; charset=utf-8");
function __autoload($clase){
  include $clase.'.class.php';
 } 
 /* crearemos un objeto de la clase Aula */
$aula=new Aula('Aula Magna');
print "<br><i>El identificador del aula recien creada es</i>: ".$aula->identificador;

/* creamos tres objetos de la clase Alumnos */
$alumno[0]=new Alumnos ('Juan Carlos', 'Rodriguez');
$alumno[1]=new Alumnos ('Feliciano','Perez');
$alumno[2]=new Alumnos ('Luisindo','Orcasitas');

print "<br /><br /><i>Los objetos del array alumnos son estos</i>: ";

/* El primer bucle nos permite leer los elementos del array (objetos) y el segundo
   extrae el nombre de la propiedad y su valor */
   foreach ($alumno as $indice=>$objeto){
        print "<br>".$indice."  ";
        //print "<br>".$indice."  ".$objeto->nombre."  ".$objeto->apellidos; sin el siguiente foreach solo consigo los nombres y apellidos pero no el nombre de la propiedad
            foreach ($objeto as $propiedad=>$valor){
                print "<i>".$propiedad."</i>: ".$valor."; ";
            }
   }
/* añadimos algunos objetos Alumnos a la propiedad alumnos de la clase Aula */
$aula->alumnos[]=$alumno[0];
$aula->alumnos[]=$alumno[1];
/* incluimos un nuevo objeto en el array alumnos de la clase Aula */
$aula->alumnos[]=new Alumnos ('Sindulfo','Yebra');
/* copiamos el objeto recien creado en un nuevo objeto */
$alumno[3]=$aula->alumnos[2];
print "<br /><br /><i>Los objetos de la propiedad alumnos de la clase Aula son estos</i>: ";
   foreach ($aula->alumnos as $indice=>$objeto){
        print "<br>".$indice."  ";
            foreach ($objeto as $propiedad=>$valor){
                print "<i>".$propiedad."</i>: ".$valor."; ";
            }
   }
/* modificamos nombres de alumnos tanto en el array alumnos como en los objetos aula->alumnos */
$aula->alumnos[0]->nombre="Tácito Petronio";
$alumno[1]->nombre="Francisca Maria";
$alumno[3]->nombre="Iñigo Francisco";

print "<br><br><br>La modificación se produce en ambos lugares<br><br>";
print "<br /><br /><i>Los objetos del array alumnos después de los cambios son</i>: ";
     foreach ($alumno as $indice=>$objeto){
        print "<br>".$indice."  ";
            foreach ($objeto as $propiedad=>$valor){
                print "<i>".$propiedad."</i>: ".$valor."; ";
            }
   }

print "<br><br><i>En la clase Aula vemos esto después de los cambios:</i>: ";
   foreach ($aula->alumnos as $indice=>$objeto){
        print "<br>".$indice."  ";
            foreach ($objeto as $propiedad=>$valor){
                print "<i>".$propiedad."</i>: ".$valor."; ";
            }
   }
/* eliminaremos algunos objetos. En un caso lo haremos en los de clase Aula
    y en otros en el array alumno */
unset($aula->alumnos[0]);
unset($alumno[1]);
unset($aula->alumnos[2]);
print "<br><br><br>Después de destruir objetos.<br>";
                  print "<br>Tácito e Iñigo en el objeto de la Clase Aula";
                  print "<br>Francisca en el objeto alumnos";

print "<br><br><i>Los objetos del array alumno después de eliminar  son</i>: ";
     foreach ($alumno as $indice=>$objeto){
        print "<br>".$indice."  ";
            foreach ($objeto as $propiedad=>$valor){
                print "<i>".$propiedad."</i>: ".$valor."; ";
            }
   }

print "<br /><br /><i>Los objetos de la clase Aula después de eliminar son estos</i>: ";
      foreach ($aula->alumnos as $indice=>$objeto){
        print "<br>".$indice."  ";
            foreach ($objeto as $propiedad=>$valor){
                print "<i>".$propiedad."</i>: ".$valor."; ";
            }
}