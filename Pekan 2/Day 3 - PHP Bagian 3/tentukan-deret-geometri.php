<?php
function tentukan_deret_geometri($arr)
{
  // kode di sini
  $hasil = "";
  $r = $arr[1] / $arr[0];
  $n = count($arr);
  $Un = $arr[0] * pow($r, $n - 1);
  if ($Un != $arr[$n - 1]) {
    $hasil = "FALSE<br>";
  } else {
    $hasil = "TRUE<br>";
  }
  return $hasil;
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
