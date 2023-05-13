<?php 
  require_once '../dbkoneksi.php';
?>
<?php 
    $_idedit = $_GET['idedit'];
    if(!empty($_idedit)){
        // edit
        $sql = "SELECT * FROM produk WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_idedit]);
        $row = $st->fetch();
    }else{
        // new data
        $row = [];
    }
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Edit Produk</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-body">

                <form method="POST" action="proses_produk.php">
                    <div class="form-group row mt-3 ">
                        <label for="kode" class="col-4 col-form-label">Kode</label>
                        <div class="col-8">
                            <div class="input-group">
                                <input id="kode" name="kode" type="text" class="form-control" value="<?=$row['kode']?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="nama" class="col-4 col-form-label">Nama Produk</label>
                        <div class="col-8">
                            <div class="input-group">
                                <input id="nama" name="nama" type="text" class="form-control" value="<?=$row['nama']?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
                        <div class="col-8">
                            <div class="input-group">
                                <input id="harga_beli" name="harga_beli" value="<?=$row['harga_beli']?>" type="text"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="stok" class="col-4 col-form-label">Stok</label>
                        <div class="col-8">
                            <div class="input-group">
                                <input id="stok" name="stok" value="<?=$row['stok']?>" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="min_stok" class="col-4 col-form-label">Minimum Stok</label>
                        <div class="col-8">
                            <div class="input-group">
                                <input id="min_stok" name="min_stok" value="<?=$row['min_stok']?>" type="text"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="jenis" class="col-4 col-form-label">Jenis Produk</label>
                        <div class="col-8">
                            <?php 
                    $sqljenis = "SELECT * FROM jenis_produk";
                    $rsjenis = $dbh->query($sqljenis);
                ?>
                            <select id="jenis" name="jenis" class="custom-select">
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
                    <div class="form-group row mt-3">
                        <div class="offset-4 col-8">
                            <?php
              $button = (empty($_idedit)) ? "Simpan":"Update"; 
          ?>
                            <input type="submit" name="proses" type="submit" class="btn btn-primary"
                                value="<?=$button?>" />
                            <input type="hidden" name="idedit" value="<?=$_idedit?>" />
                        </div>
                    </div>
                </form>

            </div>

        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>