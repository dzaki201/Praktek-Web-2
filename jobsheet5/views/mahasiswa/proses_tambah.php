<?php

include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

$database=new database;
$db=$database->getKoneksi();

if(isset($_POST['submit'])){
    $NIM=$_POST['NIM'];
    $Nama=$_POST['Nama'];
    $Tempat_Lahir=$_POST['Tempat_Lahir'];
    $Tanggal_Lahir=$_POST['Tanggal_Lahir'];
    $Jenis_Kelamin=$_POST['Jenis_Kelamin'];
    $Agama=$_POST['Agama'];
    $Alamat=$_POST['Alamat'];

    $mahasiswaController=new MahasiswaController($db);
    $result=$mahasiswaController->createMahasiswa($NIM,$Nama,$Tempat_Lahir,$Tanggal_Lahir,$Jenis_Kelamin,$Agama,$Alamat);
    if ($result){
        header("location:index.php");
    }else{
        header("location:tambah_mahasiswa");
    }
}