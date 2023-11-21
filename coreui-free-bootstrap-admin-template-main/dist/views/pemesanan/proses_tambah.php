<?php

include_once '../../config.php';
include_once '../../controllers/PemesananController.php';

$database=new database;
$db=$database->getKoneksi();

if(isset($_POST['submit'])){
    $nama=$_POST['nama'];
    $tanggal=$_POST['tanggal'];
    $pesanan=$_POST['pesanan'];

    $pemesananController=new PemesananController($db);
    $result=$pemesananController->createPemesanan($nama, $tanggal, $pesanan);
    if ($result){
        header("location:index.php");
    }else{
        header("location:tambah.php");
    }
}