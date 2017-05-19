<?php
// Inheritance
//
// If we are not creating an constructor function of
// an child class then it will take constructor function of an
// parent class unless it will work normally

class TV {

  public $model;
  public $volume;

  function volumeUp(){
    $this->volume++;
  }

  function volumeDown(){
    $this->volume--;
  }

  function __construct($m='abc',$v=1){
    $this->model = $m;
    $this->volume = $v;
  }
}

class TvWithTime extends TV {
  public $timer = true;
}

class PlazmaTv extends TV {
  public $plazma = true;
}

$tv = new TvWithTime("TV with timer",2);
echo $tv->model;
echo $tv->volume;

echo "<hr />";

$plazma_tv = new PlazmaTv("Plazma Tv",5);
echo $plazma_tv->model;
echo $plazma_tv->volume;

?>
