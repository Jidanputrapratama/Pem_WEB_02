<?php
if(isset($_GET['submit'])){
    $nama= $_GET['Nama'];
    $matkul = $_GET['Matkul'];
    $uts = $_GET['UTS'];
    $uas = $_GET['UAS'];
    $praktikum = $_GET['Praktikum'];
    $average = ($uts + $uas + $praktikum) / 3;


    echo "Nama : $nama <br>";
    echo "Mata Kuliah : $matkul <br>";
    echo "Nilai UTS : $uts <br>";
    echo "Nilai UAS : $uas <br>";
    echo "Nilai Praktikum : $praktikum";
}else{
    echo "Tidak ada data yang ke submit !!!";
}