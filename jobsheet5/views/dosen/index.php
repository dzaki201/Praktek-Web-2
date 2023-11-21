<!DOCTYPE html>
<html lang="en">
<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/DosenController.php';
require'../../index.php';
//instansiasi class database
$database=new database;
$db=$database->getKoneksi();

$dosenController=new DosenController($db);
$dosen=$dosenController->getAllDosen();

?>

<body>


<h3>Data Dosen</h3>
<a href="tambah.php" class="btn btn-primary mb-2">Tambah Dosen</a>

<table border="1" class="table table-bordered border-primary"  >
<tr>
    <th>No</th>
    <th>NIDN</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>
<?php
$no=1;
foreach($dosen as $x){
?>
<tr>
    <td><?php echo $no++?></td>
    <td><?php echo $x['nidn']?></td>
    <td><?php echo $x['nama']?></td>
    <td><?php echo $x['alamat']?></td>

    <td>
        <a href="edit.php?id=<?php echo $x['id'];?>" class="btn btn-warning">edit</a>
        <a href="hapus.php?id=<?php echo $x['id'];?>" class="btn btn-danger"onclick="return confirm('Apakah Yakin akan menghapus?')">hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
</body>
</html>
</div>
