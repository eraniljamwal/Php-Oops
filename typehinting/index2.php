<?php

// typehinting is use for security becuase by mistake also we cant inject an object of different class


interface test {
    public function doSomething();
}

class ABC implements test{
  public function dosomething(){
    echo "Doing Something";
  }
}

class XYZ implements test{
  public function dosomething(){
    echo "Doing Something from XYZ class";
  }

  public function doSomethingElse(){
    echo "Doing Something Else.";
  }



}

function test(test $abc){ // if we are implementing from interface_exists then we can directly define types as an interface name
    $abc->doSomething();
}

$abc = new XYZ();

test($abc);

?>
