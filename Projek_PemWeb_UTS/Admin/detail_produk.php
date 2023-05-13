<?php

require_once 'dbkoneksi.php';

include_once 'template/topbar.php';
include_once 'template/sidebar.php';

// Mendapatkan nilai id dari parameter GET
$_id = $_GET['id'];

// Membuat query SQL untuk mengambil data produk dengan id tertentu
$sql = "SELECT * FROM produk WHERE id=?";
$st = $dbh->prepare($sql);

// Menjalankan query dengan parameter id yang telah didapatkan sebelumnya
$st->execute([$_id]);

// Mengambil hasil query dan menyimpannya ke dalam variabel $row
$row = $st->fetch();
?>


<div class="container-fluid m-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td><?= $row['id'] ?></td>
                        </tr>
                        <tr>
                            <th>Kode</th>
                            <td><?= $row['kode'] ?></td>
                        </tr>
                        <tr>
                            <th>Nama Kota atau Hotel</th>
                            <td><?= $row['nama'] ?></td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td><?= $row['harga'] ?></td>
                        </tr>
                        <tr>
                            <th>Stok</th>
                            <td><?= $row['stok'] ?></td>
                        </tr>
                        <tr>
                            <th>Jenis Produk</th>
                            <td><?= $row['jenis_produk'] ?></td>
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