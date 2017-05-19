<?php

// Typehinting : is defining Type
// when we are assoigning value to a variable at that time php automatically
//unterstand the type of variable

//but if we are using array we can specify like $this->function test (array $arr){}

function test(array $arr){
  echo "<table>";
  foreach($arr as $k => $v){
    echo "<tr><td>$k</td><td>$v</td></tr>";
  }
  echo "</table>";
}

$array =  ['abc'=> 'ABC','xyz'=>'XYZ'];
test($array);
?>
