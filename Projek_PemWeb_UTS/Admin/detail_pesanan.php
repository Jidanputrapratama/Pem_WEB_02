<?php

require_once 'dbkoneksi.php';

include_once 'template/topbar.php';
include_once 'template/sidebar.php';

// Mendapatkan nilai id dari parameter GET
$_id = $_GET['id'];

// Membuat query SQL untuk mengambil data produk dengan id tertentu
$sql = "SELECT * FROM pesanan WHERE id=?";
$st = $dbh->prepare($sql);

// Menjalankan query dengan parameter id yang telah didapatkan sebelumnya
$st->execute([$_id]);

// Mengambil hasil query dan menyimpannya ke dalam variabel $row
$row = $st->fetch();
?>



<div class="container m-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>ID</td>
                            <td><?= $row['id'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td><?= $row['tanggal'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Tempat Wisata</td>
                            <td><?= $row['nama_produk'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Pemesan</td>
                            <td><?= $row['nama_pemesan'] ?></td>
                        </tr>
                        <tr>
                            <td>Total Harga</td>
                            <td><?= $row['total_harga'] ?></td>
                        </tr>
                        <tr>
                            <td>Qty</td>
                            <td><?= $row['qty'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat Pemesan</td>
                            <td><?= $row['alamat_pemesan'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'template/footer.php';
?>