<?php

//Array Index
$animals = ['anjing', 'macan', 'hiu', 'buaya', 'burung'];

//Menambahkan data ke array
array_push($animals, "kambing");

// Mengakses array index
echo $animals[2];

// Array Assosiatif
$animal = [
    'nama' => $animals[1],
    'jenis' => 'Karnivora',
    'usia' => "4 bulan"
];

// Mengakses array assosiatif
echo $animal['jenis'];
