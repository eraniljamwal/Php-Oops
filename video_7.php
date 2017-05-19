<?php

// Late static binding
// For late static binding to get the table name from child class
// we should use static::$table keywords.
// when we are adding $static::$table that means in compile time
// our compiler will hold the value of table for run time compling and
// it will execute after compiling.

class DB {
  protected static $table = "basetable";

  public function select(){
    //echo "select * from ". self::$table;
    echo "select * from ". static::$table;

  }

  public function insert(){
    echo "Insert into ". self::$table;
  }
}

class abc extends DB{
  protected static $table = "abc";
}

$abc = new abc;
$abc->select();

?>
