<?php

include_once '../../config.php';
include_once '../../controllers/PemesananController.php';

$database=new database;
$db=$database->getKoneksi();

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $id_bus = $_POST['id_bus'];

    $pemesananController = new PemesananController($db);
    $result = $pemesananController->createPemesanan($nama, $tanggal, $id_bus);

    if ($result) {
        header("location:pemesanan");
    } else {
        header("location:tambahpemesanan?status=failed");
    }
}