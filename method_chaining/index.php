<?php
// mthod chaning in ACTIVE records in CI
// In CI when we are using it we are using $this->db-from('table_name')
//                                               ->select(['col1','col2']))
//                                               ->where('col1','abc')
//                                               ->get();


class ABC{
  public $value = '$value  property of ABC class';
}
class XYZ{
  public $abc;
  public function __construct(){
    $this->abc = new ABC;
  }
}

$xyz = new XYZ;
echo $xyz->abc->value; // xyz is superobject , abc is subobject and value is property
?>
