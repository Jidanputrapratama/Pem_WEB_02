<?php
if(isset($_POST['submit'])){
    $nim= $_POST['nim'];
    $nama= $_POST['nama'];
    $gender= $_POST['gender'];
    $prodi= $_POST['prodi'];

    if (!empty($_POST['skill'])){
        $skills= $_POST['skill'];
    }
    $domisili= $_POST['domisili'];
    $email= $_POST['email'];

    echo"NIM: $nim";
    echo"<br> Nama: $nama";
    echo"<br> Jenis Kelamin: $gender"; 
    echo"<br> Program Studi: $prodi";
    echo"<br> Skill Programming: ";

    $listNilai = [];

    if (!empty($_POST['skill'])) {
        foreach($skills as $skill){
            if($skill == 'HTML'){
                array_push($listNilai,10);
            }elseif($skill == 'CSS') {
                array_push($listNilai,10);
            }elseif($skill == 'JavaScript') {
                array_push($listNilai,20);
            }elseif($skill == 'RWD Bootstrap') {
                array_push($listNilai,20);
            }elseif($skill == 'PHP') {
                array_push($listNilai,30);
            }elseif($skill == 'Python') {
                array_push($listNilai,30);
            }elseif($skill == 'Java') {
                array_push($listNilai,50);
            }

            echo $skill. ", ";
        }
    }

    $nilai = array_sum($listNilai);

    echo"<br> Domisili: $domisili";
    echo"<br> Email: $email";
    echo "<br> Total Nilai: $nilai";

    //Tugas Praktikum 3

    if ($nilai == 0) {
        echo "<br> Predikat Tidak Memadai";
    }elseif ($nilai > 0 AND $nilai <= 40) {
        echo "<br> Predikat : Kurang"; 
    }elseif ($nilai > 40 AND $nilai <= 60) {
        echo "<br> Predikat : Cukup";
    }elseif ($nilai > 60 AND $nilai <= 100) {
        echo "<br> Predikat : Baik";
    }elseif ($nilai > 100 AND $nilai <= 170) {
        echo "<br> Predikat : Sangat Baik";
    }else {
        echo "<br> Skor Tidak Valid";
    }
}
?>