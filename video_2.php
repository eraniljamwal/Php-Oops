<?php

// Constructor function : It will call automatically

class TV {

  public $model;
  public $volume;

  function volumeUp(){
    $this->volume++;
  }

  function volumeDown(){
    $this->volume--;
  }

  function __construct($m,$v){
    $this->model = $m;
    $this->volume = $v;
  }
}

$tv = new TV("Abc",3);
echo $tv->model;
echo $tv->volume;

?>
