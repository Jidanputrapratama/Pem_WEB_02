<?php 
require_once '../dbkoneksi.php';
?>

<form method="POST" action="proses_pembelian.php">
    <div class="form-group row mt-2">
        <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
        <div class="col-8">
            <div class="input-group">
                <input id="tanggal" name="tanggal" type="date" class="form-control" value="">
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label for="nomor" class="col-4 col-form-label">Nomor</label>
        <div class="col-8">
            <div class="input-group">
                <input id="nomor" name="nomor" type="text" class="form-control" value="">
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label for="produk_id" class="col-4 col-form-label">Produk ID</label>
        <div class="col-8">
            <div class="input-group">
                <input id="produk_id" name="produk_id" value="" type="number" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
        <div class="col-8">
            <div class="input-group">
                <input id="jumlah" name="jumlah" value="" type="number" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label for="harga" class="col-4 col-form-label">Harga</label>
        <div class="col-8">
            <div class="input-group">
                <input id="harga" name="harga" value="" type="number" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label for="vendor_id" class="col-4 col-form-label">Vendor ID</label>
        <div class="col-8">
            <div class="input-group">
                <input id="vendor_id" name="vendor_id" value="" type="number" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <div class="offset-4 col-8">
            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
        </div>
    </div>
</form>