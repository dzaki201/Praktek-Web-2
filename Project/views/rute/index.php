<!DOCTYPE html>
<html lang="en">
<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/RuteController.php';
require'../../index.php';
//instansiasi class database
$database=new database;
$db=$database->getKoneksi();

$ruteController = new RuteController($db);
$rute = $ruteController->getAllRute();    
?>

<body>

<section class="container">
<h3>Data Bus</h3>
<a href="tambahrute" class="btn btn-primary mb-2">Tambah Rute</a>

<table border="1" class="table table-bordered border-primary"  >
<tr>
    <th>No</th>
    <th>ID Rute</th>
    <th>Nama Rute</th>
    <th>Jarak (KM)</th>
</tr>
<?php
$no=1;
foreach($rute as $x){
?>
<tr>
    <td><?php echo $no++?></td>
    <td><?php echo $x['id_rute']?></td>
    <td><?php echo $x['nama_rute']?></td>
    <td><?php echo $x['jarak'] ." KM"?></td>
   
</td>


    <td>
        <a href="editrute?id_rute=<?php echo $x['id_rute'];?>" class="btn btn-warning">edit</a>
        <a href="hapusrute?id_rute=<?php echo $x['id_rute'];?>" class="btn btn-danger"onclick="return confirm('Apakah Yakin akan menghapus?')">hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
</body>
</section>
</html>
</div>
