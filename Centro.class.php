<?php
/* escribiremos una clase cuyos único objeto sea un centro educativo.
Para poder utilizar la función __autoload el fichero tendrá como nombre
Centro.class.php que coincide con el nombre de la clase */
class Centro{
      /* establecemos las propiedades con condición de protegidas*/
  protected $nombre="I.E.S. «Las Pruebas y los Objetos»";  //nombre del centro
  protected $identificador="Q337777777x"; //podría ser el N.I.F.
  protected $localidad="Fuentes de Narcea (Degaña)";
  protected $aulas=array(); // será un array destinado a contener  ulas (objetos de otra clase)
  /* insertamos un costructor con visibilidad protegida.
     De esa forma evitamos que pueda ser invocado desde fuera de la clase de alguna de sus extendidas */
  protected function __construct(){
    print "Objeto creado satisfactoriamente<br>";
  }
  /* Agregamos una variable privada y estatica con valor nulo que solo será visible
    desde la propia clase y no requerirá  un objeto para ser instanciada */
  protected static $instancia;
  /* Incluimos un método público y estático con nombre Unico() que:
       – Comprueba si la propiedad $instancia tiene valor.
       – En caso de tenerlo nos da un mensaje de advertencia.
       – Si no lo tiene crea un nuevo objeto de la clase actual. */
  public static function Unico(){
            if (!isset(self::$instancia)) {
                $objeto =__CLASS__; // __CLASS__ contiene el nombre de la clase actual
                self::$instancia = new $objeto;
             }else{
               print "Ya existe un objeto Centro y ha de ser único";
             }
             return self::$instancia;
  }
}
?>