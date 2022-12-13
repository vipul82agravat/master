<?php

class car {
  protected $model;
  protected $hasSunRoof;
  protected $numberOfDoors;
  protected $price;

  // string type hinting
  public function setModel(string $model)
  {
    $this->model = $model;
  }

  // boolean type hinting
  public function setHasSunRoof(bool $value)
  {
    $this->hasSunRoof = $value;
  }

  // integer type hinting
  public function setNumberOfDoors(int $value)
  {
    $this->numberOfDoors = $value;
  }

  // float type hinting
  public function setPrice(float $value)
  {
    $this->price = $value;
  }        
} 
$car =new car;
$car->setModel('vv');
$car->setHasSunRoof('1');
$car->setNumberOfDoors(1);
$car->setPrice('12.31');
print_r($car);

?>