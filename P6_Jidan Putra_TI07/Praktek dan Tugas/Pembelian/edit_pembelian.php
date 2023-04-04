<?php 
require_once '../dbkoneksi.php';
?>

<?php 
    $_idedit = $_GET['id'];
    if(!empty($_idedit)){
        // edit
        $sql = "SELECT * FROM pembelian WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_idedit]);
        $pembelian = $st->fetch();
    }else{
        // new data
        $pembelian = [];
    }
?>

<form method="POST" action="proses_pembelian.php">
    <div class="form-group row mt-2">
        <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
        <div class="col-8">
            <div class="input-group">
            </div>
            <input id="tanggal" name="tanggal" type="date" class="form-control" value="<?= $pembelian['tanggal']?>">
        </div>
    </div>
    </div>

    <div class="form-group row mt-2">
        <label for="nomor" class="col-4 col-form-label">Nomor Pembelian</label>
        <div class="col-8">
            <div class="input-group">

            </div>
            <input id="nomor" name="nomor" type="text" class="form-control" value="<?= $pembelian['nomor']?>">
        </div>
    </div>
    </div>

    <div class="form-group row mt-2">
        <label for="produk_id" class="col-4 col-form-label">Produk_Id</label>
        <div class="col-8">
            <div class="input-group">
                <input id="produk_id" name="produk_id" value="<?= $pembelian['produk_id']?>" type="number"
                    class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
        <div class="col-8">
            <div class="input-group">
                <input id="jumlah" name="jumlah" value="<?= $pembelian['jumlah']?>" type="number" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label for="harga" class="col-4 col-form-label">Harga</label>
        <div class="col-8">
            <div class="input-group">
                <input id="harga" name="harga" value="<?= $pembelian['harga']?>" type="number" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label for="vendor_id" class="col-4 col-form-label">Vendor ID</label>
        <div class="col-8">
            <div class="input-group">
                <input id="vendor_id" name="vendor_id" value="<?= $pembelian['vendor_id']?>" type="number"
                    class="form-control">
            </div>
        </div>
    </div>

    <input type="hidden" value="<?= $pembelian['id']?>" name="id">

    <div class="form-group row mt-2">
        <div class="offset-4 col-8">
            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Update" />
        </div>
    </div>
</form>