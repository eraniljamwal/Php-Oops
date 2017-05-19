<?php

// Counting how many object created

class abc {
  public static $objectCount = 0;

  public static function getCount(){
    return self::$objectCount;
  }

  public function __construct(){
    self::$objectCount++;
  }
}

$a = new abc();
$b = new abc();
$c = new abc();
$d = new abc();

echo abc::getCount();

?>
