<?php
header("Content-type: text/html; charset=utf-8");
/* la funcion autoload nos evita problemas a la hora de incluir los ficheros
   que contienen las clases requeridas */
function __autoload($clase){
  include $clase.'.class.php';
 }
/* creamos el objeto miCentro tal como se describe en los ejemplos anteriores */
$miCentro=Centro::Unico();

/* comprobemos el contenido del objeto */
print "<br>Estas son las propiedades del objeto miCentro<br>";
print "<pre>";
print var_dump($miCentro);
print "</pre>";

/* vamos a crear el objetos de la clase Aula
  si miras el código fuente de la clase Aula.class.php verás que el contructor
  agrega el valor correspondiente al identificador de cada objeto
  por esa razón cuando instanciemos objetos Aula vamos a incluir como argumento
  el valor de ese identificador */
/* un array nos puede ser util para crear masivamente las aulas */
$nombre_aulas=array('1º A','2º C','4º F','3º B','1B A');
/* Leeremos este array e iremos creando nuevos objetos de la clase Aula
   incluyendo el identificador que requiere el constructor */
for ($i=0;$i<sizeof($nombre_aulas);$i++){
  /* Haremos que los nuevos objetos sean elementos de un array escalar
     Para ello solo tenemos que agregar [] a misAulas y cada objeto creado
     pasará a ser un elemento de ese array */
  $misAulas[]=new Aula($nombre_aulas[$i]);
}
/* comprobemos el contenido de los objetos  */
print "<br>Comprobación de los objetos misAulas<br>";
print "<pre>";
print var_dump($misAulas);
print "</pre>";

/* con una estrategia similar podremos crear los objetos de la clase Alumnos
Ahora al instanciar cada objeto incliremos su nombre y apellido */

/* estos son los datos para los objetos alumnos */
$nombre_alumnos=array('Ana','Benito','Carla','Dionisio','Esther','Fernando','Guiomar','Herminio','Isabel','Jenaro');
$apellidos_alumnos=array('Jiménez','Iglesias','Husillos','Gómez','Fernández',
                               'Escapa','Díaz','Casado','Blázquez','Alonso');
for ($i=0;$i<sizeof($nombre_alumnos);$i++){
  $misAlumnos[]=new Alumnos($nombre_alumnos[$i],$apellidos_alumnos[$i]);
  }
  /* comprobemos el contenido de los nuevos objetos */
  print "<br>Comprobación de los objetos misAlumnos<br>";
  print "<pre>";
print var_dump($misAlumnos);
print "</pre>";

?>