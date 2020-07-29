<?php

function palindrome_angka($angka)
{
  $balik = "";
  for ($i = strlen($angka) - 1; $i >= 0; $i--) {
    $balik .= $angka[$i];
  }
  return $balik;
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001
