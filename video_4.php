<?php
// Abstraction (Abstract means incomplete)
// Abstract method enforce the child class to define its body unless it will throw error
// If we add any abstract class in our class then it will automatically make our class as an abstract class
// If we are directly adding class name as an abstract then we dont want directly anybody can create this class object
// Abstract classes may contain normal methoids or Abstract function
class TV {

  protected $model;
  private $volume;

  function volumeUp(){
    $this->volume++;
  }

  function volumeDown(){
    $this->volume--;
  }

  function getModel(){
      return $this->model;
  }

  function __construct($m,$v){
    $this->model = $m;
    $this->volume = $v;
  }
}

class PlazmaTv extends TV {
  function getModel(){
    return $this->model;
  }
}

$tv =  new TV("abc",3);
echo $tv->getModel();

$plazma = new PlazmaTv("def",2); // error because plazma tv cant access parent class private variable
echo $plazma->getModel();

?>
