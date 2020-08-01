<?php
require_once 'animal.php';
class Ape extends animal
{
  public function __construct($name, $legs = 2, $cold_blooded = FALSE)
  {
    $this->name = $name;
    $this->legs = $legs;
    $this->cold_blooded = $cold_blooded;
  }

  public function yell()
  {
    return "Auooo";
  }
}
