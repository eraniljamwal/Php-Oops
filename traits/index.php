<?php

// Traits : if in an class two or more functions are there and
// while inheriting class we are inheriting few functions in first five class_existsand few in
//and ew functions in last few classes then we are using traits

//traits extends in horizontal like a sibling

class abc {
  public function test1(){
    echo "Test 1 called";
  }
}

trait def{
  public function test2(){
    echo "Test2 called";
  }
}

trait ghi{
  public function test3(){
    echo "Test3 called";
  }
}

class one extends abc{
  use def,ghi; // for using multiple traits
}

class two extends abc{

}

class three extends abc{

}

class four extends abc{

}

class five extends abc{

}

$one = new one(); // test2 function is available in only class one but not in class two
$one -> test3();

?>
