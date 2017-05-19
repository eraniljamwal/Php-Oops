<?php
// Static mysqli_embedded_server_start

// Normal function are linked with object
// static functions are directly linked with class

//for creating static variable or function we must have to add static
//keyword before them

//If we are using static methods then we can directl access them by class name
//E.g : abc::xyz; for method , For variable : abc::$data;

class abc {
  public  static $data = "test data";

  public static function xyz(){
    echo "xyz function";
  }
}

echo abc::xyz();


?>
