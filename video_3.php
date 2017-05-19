<?php
// Encapsulation : Access specifiers or restricting the access levels
// public We can access it outside the class (Like public buses)
// Protected : we can acces till one inherited class (Family car for family only)
// private : we can access it within the (For mobile password)
// if we want to get the value using object
// for that we need to use getter function and in that
// function we need to specify what is the getter function
// return type then we can able to access private variable with objects

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
