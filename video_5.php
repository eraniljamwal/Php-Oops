<?php
// Interface
// In interface we have only abstract methods
//If we define class as an abstract then we have no need to write abstract keyword
//before function name because its automatically understand all methods are abstract

//Interfaces are not extend it only implements
// If we define function in abstract class then these function body must be defined in
//child class


// Major advantage of interface is to overcome multiple inheritance feature
// In interface we cant define variables.
// In interface we cant create constructor function also.
// In interface we cant create private or protected  function.

interface a {
  //public $data; // In interface we cant define variables.
  public function abc();
}

interface b{
  public function xyz();
}

class c implements a,b{
  public function abc(){
    echo "abc function";
  }
  public function xyz(){
    echo "xyz function";
  }

}

?>
