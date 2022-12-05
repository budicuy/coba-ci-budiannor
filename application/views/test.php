<?php
// $a=10;
// $b=15;
// tampilkan
// 10 lebih kecil dari 15 atau
// 10 lebih besar dari 15

// pakai
// 1) notasi if
// 2) operator kondisi ? :


$a = 10;
$b = 15;

if ($a < $b) {
    echo "$a lebih kecil dari $b";
} else {
    echo "$a lebih besar dari $b";
}

echo "<br>";

echo $a < $b ? "$a lebih kecil dari $b" : "$a lebih besar dari $b";
