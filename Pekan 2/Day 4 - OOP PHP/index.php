<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Berlatih OOP</title>
</head>

<body>
  <?php
  require 'animal.php';
  require 'Frog.php';
  require 'Ape.php';
  // Animal
  $sheep = new animal("shaun");

  echo "Nama hewan : " . $sheep->getName() . "<br>"; // "shaun"
  echo "Jumlah kaki : " . $sheep->getLegs() . "<br>"; // 2
  echo "Hewan berdarah dingin atau tidak : " . $sheep->getCold_Blooded(); // false
  echo "<br>";
  echo "<br>";

  // NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
  // Ape
  $sungokong = new Ape("kera sakti");
  echo "Nama hewan : " . $sungokong->getName() . "<br>";
  echo "Jumlah kaki : " . $sungokong->getLegs() . "<br>";
  echo "Suara hewan : " . $sungokong->yell(); // "Auooo"
  echo "<br>";
  echo "<br>";

  // Frog
  $kodok = new Frog("buduk");
  echo "Nama hewan : " . $kodok->getName() . "<br>";
  echo "Jumlah kaki : " . $kodok->getLegs() . "<br>";
  echo "Gerakan hewan : " . $kodok->jump(); // "hop hop"
  ?>
</body>

</html>