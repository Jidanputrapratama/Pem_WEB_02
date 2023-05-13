<?php
require_once '../dbkoneksi.php';

// menangkap data dari URL
$id = $_GET['iddel'];

$dbh->query("DELETE FROM pembelian WHERE id=$id");

header('location:index_pembelian.php');