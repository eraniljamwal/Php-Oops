<?php

// Overriding in traits : If the same method is in the class and in traits also then which function will get precedence


class Base {
  public function abc(){
    echo "ABC method from base class called"; // 3rd precendence in overriding
  }
}

trait Test{
  public function abc(){
    echo "ABC method from traits class called"; // 2nd precendence in overriding
  }
}

class Child extends Base{
  use Test;
  public function abc(){
    echo "ABC method from child class called"; // 1st precendence in overriding
  }
}

$obj = new Child; // test2 function is available in only class one but not in class two
$obj -> abc();

?>
