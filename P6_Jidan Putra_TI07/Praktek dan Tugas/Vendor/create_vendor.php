<?php 
require_once '../dbkoneksi.php';
?>

<form method="POST" action="proses_vendor.php">
    <div class="form-group row mt-2">
        <label for="nomor" class="col-4 col-form-label">Nomor</label>
        <div class="col-8">
            <div class="input-group">
                <input id="nomor" name="nomor" type="text" class="form-control" value="">
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label for="nama" class="col-4 col-form-label">Nama Vendor</label>
        <div class="col-8">
            <div class="input-group">
                <input id="nama" name="nama" type="text" class="form-control" value="">
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label for="kota" class="col-4 col-form-label">Kota</label>
        <div class="col-8">
            <div class="input-group">
                <input id="kota" name="kota" value="" type="text" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label for="kontak" class="col-4 col-form-label">Kontak</label>
        <div class="col-8">
            <div class="input-group">
                <input id="kotak" name="kontak" value="" type="number" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <div class="offset-4 col-8">
            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
        </div>
    </div>
</form>