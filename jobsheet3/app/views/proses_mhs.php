<?php
include'../classes/database.php';
$db=new database();

$aksi=$_GET['aksi'];
if($aksi=="tambah"){
    $db->tambah_mhs($_POST['NIM'],$_POST['Nama'],$_POST['Alamat']);
    header("location:tampil_mhs.php");
}