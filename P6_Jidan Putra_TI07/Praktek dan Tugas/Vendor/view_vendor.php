<?php 
require_once '../dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from pembelian where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM pembelian a
    //INNER JOIN jenis_pembelian b ON a.jenis_pembelian_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM vendor WHERE id=?";
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
            <td>Nomor</td>
            <td><?=$row['nomor']?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?=$row['nama']?></td>
        </tr>
        <tr>
            <td>Kota</td>
            <td><?=$row['kota']?></td>
        </tr>
        <tr>
            <td>kontak</td>
            <td><?=$row['kontak']?></td>
        </tr>
    </tbody>
</table>