<?php
class ABC{
  public function fun1(){
    echo "fun 1 of Abc Class";
    return $this;
  }

  public function fun2(){
    echo "fun 2 of Abc Class";
    return $this;
  }

  public function fun3(){
    echo "fun 3 of Abc Class";
    return $this;
  }
}
$abc = new ABC;
$abc->fun1()->fun2()->fun3();
?>
