<?php
class animal
{
  public $name;
  public $legs;
  public $cold_blooded;

  public function __construct($name, $legs = 2, $cold_blooded = false)
  {
    $this->name = $name;
    $this->legs = $legs;
    $this->cold_blooded = $cold_blooded;
  }
  public function getName()
  {
    return $this->name;
  }
  public function getLegs()
  {
    return $this->legs;
  }
  public function getCold_Blooded()
  {
    if ($this->cold_blooded == FALSE) {
      return "false";
    } else {
      return "true";
    }
  }
}
