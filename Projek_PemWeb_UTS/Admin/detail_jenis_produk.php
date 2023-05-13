<?php

require_once 'dbkoneksi.php';

include_once 'template/topbar.php';
include_once 'template/sidebar.php';

// Mendapatkan nilai id dari parameter GET
$_id = $_GET['id'];

// Membuat query SQL untuk mengambil data produk dengan id tertentu
$sql = "SELECT * FROM jenis_produk WHERE id=?";
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
                            <td>Nama Kota atau Hotel</td>
                            <td><?= $row['nama'] ?></td>
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