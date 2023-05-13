<?php 
    require_once '../dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM pembelian";
   $pembelians = $dbh->query($sql);
?>

<a class="btn btn-success" href="create_pembelian.php" role="button">Create Pembelian</a>
<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr style="text-align: center;">
            <th>ID</th>
            <th>Tanggal</th>
            <th>Nomor</th>
            <th>Produk Id</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Vendor ID</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
                $nomor  =1 ;
                foreach($pembelians as $pembelian){
                ?>
        <tr style="text-align: center;">
            <td><?=$nomor++ ?></td>
            <td><?=$pembelian['tanggal']?></td>
            <td><?=$pembelian['nomor']?></td>
            <td><?=$pembelian['produk_id']?></td>
            <td><?=$pembelian['jumlah']?></td>
            <td><?=$pembelian['harga']?></td>
            <td><?=$pembelian['vendor_id']?></td>
            <td>
                <a class="btn btn-primary" href="view_pembelian.php?id=<?=$pembelian['id']?>">View</a>
                <a class="btn btn-primary" href="edit_pembelian.php?id=<?=$pembelian['id']?>">Edit</a>
                <a class="btn btn-primary" href="delete_pembelian.php?iddel=<?=$pembelian['id']?>"
                    onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$pembelian['id']?>?')) {return false}">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>