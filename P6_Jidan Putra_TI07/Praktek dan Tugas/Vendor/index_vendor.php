<?php 
    require_once '../dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM vendor";
   $vendors = $dbh->query($sql);
?>

<a class="btn btn-success" href="create.php" role="button">Create Vendor</a>
<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr style="text-align: center;">
            <th>Id</th>
            <th>Nomor</th>
            <th>Nama</th>
            <th>Kota</th>
            <th>Kontak</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
                $nomor  =1 ;
                foreach($vendors as $vendor){
                ?>
        <tr style="text-align: center;">
            <td><?=$nomor++ ?></td>
            <td><?=$vendor['nomor']?></td>
            <td><?=$vendor['nama']?></td>
            <td><?=$vendor['kota']?></td>
            <td><?=$vendor['kontak']?></td>
            <td>
                <a class="btn btn-primary" href="view_vendor.php?id=<?=$vendor['id']?>">View</a>
                <a class="btn btn-primary" href="edit_vendor.php?id=<?=$vendor['id']?>">Edit</a>
                <a class="btn btn-primary" href="delete_vendor.php?iddel=<?=$vendor['id']?>"
                    onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$vendor['nama']?>?')) {return false}">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>