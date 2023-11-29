<?php

include_once '../../config.php';
include_once '../../controllers/PemesananController.php';

$database=new database;
$db=$database->getKoneksi();

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $id_bus = $_POST['id_bus'];
    $harga = $_POST['harga'];
    $nama_rute = $_POST['nama_rute'];

    $pemesananController = new PemesananController($db);
    $result = $pemesananController->createPemesanan($nama, $tanggal, $id_bus, $harga, $nama_rute);

    if ($result) {
        header("location:pemesanan");
    } else {
        header("location:tambahpemesanan?status=failed");
    }
}