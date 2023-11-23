<?php

include_once '../../config.php';
include_once '../../controllers/RuteController.php';

$database=new database;
$db=$database->getKoneksi();

if(isset($_POST['submit'])){
    $nama_rute=$_POST['nama_rute'];
    $jarak=$_POST['jarak'];
   

    $ruteController=new RuteController($db);
    $result=$ruteController->createrute( $nama_rute, $jarak );
    if ($result){
        header("location:rute");
    }else{
        header("location:tambahrute");
    }
}