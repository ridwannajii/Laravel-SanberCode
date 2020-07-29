<?php
function pasangan_terbesar($angka)
{
  // kode di sini
  $panjang = strlen($angka);
  $data = [];
  for ($a = 0; $a < $panjang; $a++) {
    $data[$a] = substr($angka, $a, 2);
    $nilai[$a] = $data[$a];
  }
  return "Pasangan terbesar : " . max($nilai) . "<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99
