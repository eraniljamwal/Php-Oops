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

class xyz extends abc {
  public static  function getCount(){
    parent::getCount();
    //new function here.
  }
}

?>
