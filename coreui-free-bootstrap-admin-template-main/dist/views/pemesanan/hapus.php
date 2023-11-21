<?php

include_once '../../config.php';
include_once '../../controllers/PemesananController.php';

$database=new database;
$db=$database->getKoneksi();

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $pemesananController=new PemesananController($db);
    $result=$pemesananController->deletePemesanan($id);

    if($result){
        header("location:index.php");
    }else{
        header("Gagal Menghapus data");
    }
}