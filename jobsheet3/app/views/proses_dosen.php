<?php
include'../classes/database2.php';
$db=new database();

$aksi=$_GET['aksi'];
if($aksi=="tambah"){
    $db->tambah_dosen($_POST['nip'],$_POST['nama'],$_POST['alamat']);
    header("location:tampil_dosen.php");
}else if($aksi=="update"){
    $db->update($_POST['id'],$_POST['nip'],$_POST['nama'],$_POST['alamat']);
    header("location:tampil_dosen.php");
}else if ($aksi=="hapus"){
    $db->hapus($_GET['id']);
    header("location:tampil_dosen.php");
}