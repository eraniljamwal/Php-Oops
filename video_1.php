<?php
class TV {

  public $model = "xyz";
  public $volume = 1;

  function volumeUp(){
    $this->volume++;
  }

  function volumeDown(){
    $this->volume--;
  }
}

$tv_one = new TV;
$tv_two = new TV;


echo $tv_one->volume; // Volume One Before Increase
$tv_one->volumeUp();
echo $tv_one->volume; // Volume One After Increase

echo "<hr>";

echo $tv_two->volume; // Volume two Before Increase
$tv_two->volumeUp();
echo $tv_two->volume; // Volume two After Increase

echo "<hr>";

echo $tv_one->model; // value same as definer in model valiable
echo $tv_two->model = "abc"; // value changed and assigned in model variable
?>
