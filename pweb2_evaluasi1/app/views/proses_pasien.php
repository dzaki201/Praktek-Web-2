<?php
include'../classes/database.php';
$db=new database();

$aksi=$_GET['aksi'];
if($aksi=="tambah"){
    $db->tambah_pasien($_POST['no_rm'],$_POST['nama_pasien'],$_POST['alamat'],$_POST['tanggal_lahir']);
    header("location:tampil_pasien.php");
}else if($aksi=="update"){
    $db->update_pasien($_POST['id'],$_POST['no_rm'],$_POST['nama_pasien'],$_POST['alamat'],$_POST['tanggal_lahir']);
    header("location:tampil_pasien.php");
}else if($aksi=="hapus"){
    $db->hapus_pasien($_GET['id']);
    header("location:tampil_pasien.php");

}
