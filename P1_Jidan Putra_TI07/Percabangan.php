<?php
$jam = 23;
echo "Saat ini Pukul: $jam <br>";

$hasil = $jam < 12;

if($hasil) {
    echo "Selamat Pagi";
} elseif ($jam < 18) {
    echo "Selamat Sore";
} else {
    echo "Selamat Malam!";
}