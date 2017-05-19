<?php
// Overriding : When we inherit an  parent class and
// creating an function or variable in child class
// then our function will override
// parent class and it will execute whatever the function
// in parent class

class TV {

  public $model;
  public $volume;

  function volumeUp(){
    $this->volume++;
  }

  function volumeDown(){
    $this->volume--;
  }

  function __construct(){
    $this->model = $m;
    $this->volume = $v;
  }
}

class PlazmaTv extends TV {
  public $model = "abc"; // Overriding variable
  function __construct(){ // Overriding function
  }
}

$plazma =  new PlazmaTv;
echo $plazma->model;
?>
