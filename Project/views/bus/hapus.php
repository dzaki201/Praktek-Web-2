<?php

include_once '../../config.php';
include_once '../../controllers/BusController.php';

$database=new database;
$db=$database->getKoneksi();

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $busController=new BusController($db);
    $result=$busController->deleteBus($id);

    if($result){
        header("location:index.php");
    }else{
        header("Gagal Menghapus data");
    }
}