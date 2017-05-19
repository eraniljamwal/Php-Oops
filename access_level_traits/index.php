<?php
//Access level traits

trait abc {
  private  function xyz(){
    echo "XYZ method from trait abc";
  }
}

class test{
  use abc{
    abc::xyz as public; // changing access specifier
    //abc::xyz as public abcXyz; // changing name and accessibility
  }
}

$obj = new test;
$obj->xyz();
?>
