<?php

function palindrome_angka($angka)
{
    do {
        $angka++;
        $string = (string) $angka;
        $balik = '';
        for ($i = strlen($string) - 1; $i >= 0; $i--) {
            $balik .= $string[$i];
        }
    } while ($balik !== $string);
    return ($angka);
}
// TEST CASES
echo palindrome_angka(8); // 9
echo "<br>" . palindrome_angka(10); // 11
echo "<br>" . palindrome_angka(117); // 121
echo "<br>" . palindrome_angka(175); // 181
echo "<br>" . palindrome_angka(1000); // 1001
