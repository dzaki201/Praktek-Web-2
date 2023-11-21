<!DOCTYPE html>
<html lang="en">
<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/PemesananController.php';
require'../../index.php';
//instansiasi class database
$database=new database;
$db=$database->getKoneksi();

$pemesananController = new PemesananController($db);
$pemesanan = $pemesananController->getAllPemesanan();    
?>

<body>


<h3>Data Bus</h3>
<a href="tambah.php" class="btn btn-primary mb-2">Tambah Pesanan</a>

<table border="1" class="table table-bordered border-primary"  >
<tr>
    <th>No</th>
    <th>ID Pemesanan</th>
    <th>Nama Pemesan</th>
    <th>Tanggal</th>
    <th>Pesanan Bus</th>
<?php
$no=1;
foreach($pemesanan as $x){
?>
<tr>
    <td><?php echo $no++?></td>
    <td><?php echo $x['id']?></td>
    <td><?php echo $x['nama']?></td>
    <td><?php echo $x['tanggal']?></td>
    <td><?php echo $x['pesanan']?></td>
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
