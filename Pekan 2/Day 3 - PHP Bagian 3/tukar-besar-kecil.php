<?php

function tukar_besar_kecil($string)
{
  //kode di sini
  $newStr = '';
  $length = strlen($string);
  for ($i = 0; $i < $length; $i++) {
    if ($string[$i] >= 'A' && $string[$i] <= 'Z') {
      $newStr .= strtolower($string[$i]);
    } else if ($string[$i] >= 'a' && $string[$i] <= 'z') {
      $newStr .= strtoupper($string[$i]);
    } else {
      $newStr .= $string[$i];
    }
  }
  return $newStr;
}


// TEST CASES
echo "Hello World => " . tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo "<br>I aM aLAY => " . tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo "<br>My Name is Bond!! =>" . tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo "<br>IT sHOULD bE me =>" . tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo "<br>001-A-3-5TrdYW =>" . tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"
