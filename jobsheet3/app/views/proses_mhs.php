<?php
include'../classes/database.php';
$db=new database();

$aksi=$_GET['aksi'];
if($aksi=="tambah"){
    $db->tambah_mhs($_POST['NIM'],$_POST['Nama'],$_POST['Alamat']);
    header("location:tampil_mhs.php");
}else if($aksi=="update"){
    $db->update($_POST['id'],$_POST['NIM'],$_POST['Nama'],$_POST['Alamat']);
    header("location:tampil_mhs.php");
}else if ($aksi=="hapus"){
    $db->hapus($_GET['id']);
    header("location:tampil_mhs.php");
}