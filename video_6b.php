<?php
// Instead of this keyword for calling current variable we should use
//  self::$size;


class House {
  public static $size;
  public static function getSize(){
    return self::$size; // get value
  }

  public static function setSize($s){
    self::$size = $s; // set value
  }
}

House::setSize(1200);
echo  House::getSize();


?>
