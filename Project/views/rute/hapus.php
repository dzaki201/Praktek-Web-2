<?php

include_once '../../config.php';
include_once '../../controllers/RuteController.php';

$database=new database;
$db=$database->getKoneksi();

if(isset($_GET['id_rute'])){
    $id_rute=$_GET['id_rute'];

    $ruteController=new RuteController($db);
    $result=$ruteController->deleteRute($id_rute);

    if($result){
        header("location:rute");
    }else{
        header("Gagal Menghapus data");
    }
}