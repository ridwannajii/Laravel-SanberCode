<?php
require_once 'animal.php';
class Frog extends animal
{
  public function __construct($name, $legs = 4, $cold_blooded = TRUE)
  {
    $this->name = $name;
    $this->legs = $legs;
    $this->cold_blooded = $cold_blooded;
  }
  function jump()
  {
    return "hop hop";
  }
}
