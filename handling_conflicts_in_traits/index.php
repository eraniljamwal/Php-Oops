<?php
// if we are including traits in one class  and both traitts have common method then it will throw error
// we can handle this error by using one::test instead of two;

trait one {
  public function test(){
    echo "Test method from one trait";
  }
}

trait two{
  public function test(){
    echo "Test method from two trait";
  }
}

class abc{
  use one,two{
    two::test insteadof one;
    one::test as Onetest; // If we want both traits test methods
  }
}

$obj = new abc;
$obj->test();


?>
