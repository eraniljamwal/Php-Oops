<?php

// We must define name space in tottaly begining of our program
// by defualt all classes in global namespace
// We can define class name with same name as exist in any other namespoace


// namespaces may contain sub folder followed by this syntax
// namespace def\ghi
//
// and we can include namespace in our php file like $this->
// namespace def\ghi\jkl;
// class xyz{
//
// }



namespace def{
   class xyz{
     public function __construct(){
       echo "XYZ from DEF Namespace";
     }
   }
}

namespace { // global namespace
  class xyz{
    public function __construct(){
      echo "XYZ from Global Namespace";
    }
  }
/*
  //Another way
  use def\xyz as def;
  $obj = new def();
*/
use def\xyz as def;
$obj = new def();

  //$obj = new xyz();
  //$obj = new def\xyz(); //to call constructor from other namespace
}


?>
