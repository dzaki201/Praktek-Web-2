<!DOCTYPE html>
<html lang="en">
<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
require'../../index.php';
//instansiasi class database
$database=new database;
$db=$database->getKoneksi();

$mahasiswaController = new MahasiswaController($db);
$mahasiswa = $mahasiswaController->getAllMahasiswa();    
?>

<body>


<h3>Data Mahasiswa</h3>
<a href="tambah.php" class="btn btn-primary mb-2">Tambah Mahasiswa</a>

<table border="1" class="table table-bordered border-primary"  >
<tr>
    <th>No</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Tempat Lahir</th>
    <th>Tanggal Lahir</th>
    <th>Jenis Kelamin</th>
    <th>Agama</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>
<?php
$no=1;
foreach($mahasiswa as $x){
?>
<tr>
    <td><?php echo $no++?></td>
    <td><?php echo $x['NIM']?></td>
    <td><?php echo $x['Nama']?></td>
    <td><?php echo $x['Tempat_Lahir']?></td>
    <td><?php echo $x['Tanggal_Lahir']?></td>
    <td><?php echo $x['Jenis_Kelamin']?></td>
    <td><?php echo $x['Agama']?></td>
    <td><?php echo $x['Alamat']?></td>

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
