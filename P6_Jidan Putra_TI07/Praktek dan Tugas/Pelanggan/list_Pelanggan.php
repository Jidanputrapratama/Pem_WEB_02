<?php 
    require_once '../dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM pelanggan";
   $rs = $dbh->query($sql);
?>

<a class="btn btn-success" href="Form_Pelanggan.php" role="button">Create Pelanggan</a>
<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr style="text-align: center;">
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Email</th>
            <th>Kartu Id</th>
        </tr>
    </thead>
    <tbody>
        <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
        <tr style="text-align: center;">
            <td><?=$nomor?></td>
            <td><?=$row['kode']?></td>
            <td><?=$row['nama']?></td>
            <td><?=$row['jk']?></td>
            <td><?=$row['tmp_lahir']?></td>
            <td><?=$row['tgl_lahir']?></td>
            <td><?=$row['email']?></td>
            <td><?php
                            if ($row['kartu_id'] == "1") {
                                echo "Gold Utama";
                            } elseif ($row['kartu_id'] == "2") {
                                echo "Platinum Jaya";
                            }elseif ($row['kartu_id'] == "3") {
                                echo "Silver";
                            } else {
                                echo "Non Member";
                            }
                            ?>
            </td>
            <td>
                <a class="btn btn-primary" href="view_pelanggan.php?id=<?=$row['id']?>">View</a>
                <a class="btn btn-primary" href="edit_pelanggan.php?idedit=<?=$row['id']?>">Edit</a>
                <a class="btn btn-primary" href="delete_pelanggan.php?iddel=<?=$row['id']?>"
                    onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['nama']?>?')) {return false}">Delete</a>
            </td>
        </tr>
        <?php 
                $nomor++;   
                } 
                ?>
    </tbody>
</table>