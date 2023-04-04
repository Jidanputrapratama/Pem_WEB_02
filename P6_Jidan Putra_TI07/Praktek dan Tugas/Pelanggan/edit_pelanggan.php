<?php 
require_once '../dbkoneksi.php';
?>
<?php 
    $_idedit = $_GET['idedit'];
    if(!empty($_idedit)){
        // edit
        $sql = "SELECT * FROM pelanggan WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_idedit]);
        $row = $st->fetch();
    }else{
        // new data
        $row = [];
    }
?>
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Pelanggan</h3>

            </div>
            <div class="card-body">

                <form method="POST" action="proses_pelanggan.php">
                    <div class="form-group row mt-4">
                        <label for="kode" class="col-4 col-form-label">Kode</label>
                        <div class="col-8">
                            <div class="input-group">
                                <input id="kode" name="kode" type="text" class="form-control" value="<?=$row['kode']?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label for="nama" class="col-4 col-form-label">Nama Pelanggan</label>
                        <div class="col-8">
                            <div class="input-group">
                                <input id="nama" name="nama" type="text" class="form-control" value="<?=$row['nama']?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <label for="jk" class="col-4 col-form-label">Jenis Kelamin</label>
                        <div class="col-8">
                            <div class="input-group">
                                <input id="jk" name="jk" type="radio" value="L" class="me-2"> Laki - Laki
                                <input id="jk" name="jk" type="radio" value="P" class="mx-2"> Perempuan
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <label for="stok" class="col-4 col-form-label">Tempat Lahir</label>
                        <div class="col-8">
                            <div class="input-group">
                                <input id="tmp_lahir" name="tmp_lahir" value="<?=$row['tmp_lahir']?>" type="text"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
                        <div class="col-8">
                            <div class="input-group">
                                <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control"
                                    value="<?=$row['tgl_lahir']?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label for="email" class="col-4 col-form-label">Email</label>
                        <div class="col-8">
                            <div class="input-group">
                                <input id="email" name="email" type="text" class="form-control"
                                    value="<?=$row['email']?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label for="jenis" class="col-4 col-form-label">Jenis Kartu</label>
                        <div class="col-8">
                            <?php 
            $sqljenis = "SELECT * FROM kartu";
            $rsjenis = $dbh->query($sqljenis);
        ?>
                            <select id="kartu_id" name="kartu_id" class="custom-select">
                                <?php 
            foreach($rsjenis as $rowjenis){
         ?>
                                <option value="<?=$rowjenis['id']?>"><?=$rowjenis['nama']?></option>
                                <?php
            }
        ?>
                                <!--
        <option value="1">Elektronik</option>
        <option value="2">Furniture</option>
        <option value="3">Makanan</option>-->

                            </select>
                        </div>
                    </div>
            </div>
            <div class="form-group row mt-4">
                <div class="offset-4 col-8">
                    <?php
        $button = (empty($_idedit)) ? "Simpan":"Update"; 
    ?>
                    <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?=$button?>" />
                    <input type="hidden" name="idedit" value="<?=$_idedit?>" />
                </div>
            </div>
            </form>

        </div>
        <!-- /.card-body -->
</div>
<!-- /.card -->

</section>
<!-- /.content -->
</div>