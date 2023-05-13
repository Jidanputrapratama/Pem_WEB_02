<?php 
require_once '../dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from pembelian where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM pembelian a
    //INNER JOIN jenis_pembelian b ON a.jenis_pembelian_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM kartu WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>

<table class="table table-striped">
    <tbody>
        <tr>
            <td>ID</td>
            <td><?=$row['id']?></td>
        </tr>
        <tr>
            <td>Kode</td>
            <td><?=$row['kode']?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?=$row['nama']?></td>
        </tr>
        <tr>
            <td>Diskon</td>
            <td><?=$row['diskon']?></td>
        </tr>
        <tr>
            <td>Iuran</td>
            <td><?=$row['iuran']?></td>
        </tr>
    </tbody>
</table>