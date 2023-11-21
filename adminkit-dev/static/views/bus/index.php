<!DOCTYPE html>
<html lang="en">
<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/BusController.php';
require'../../index.php';
//instansiasi class database
$database=new database;
$db=$database->getKoneksi();

$mahasiswaController = new BusController($db);
$mahasiswa = $mahasiswaController->getAllBus();    
?>

<body>


<h3>Data Bus</h3>
<a href="tambah.php" class="btn btn-primary mb-2">Tambah Bus</a>

<table border="0" class="table table-bordered border-primary"  >
<tr>
    <th>No</th>
    <th>Nomor Lambung</th>
    <th>Nomor Polisi</th>
    <th>Tipe</th>
    <th>Kapasitas</th>
    <th>Status Operasi Bus</th>
</tr>
<?php
$no=1;
foreach($mahasiswa as $x){
?>
<tr>
    <td><?php echo $no++?></td>
    <td><?php echo $x['id']?></td>
    <td><?php echo $x['nopol']?></td>
    <td><?php echo $x['tipe']?></td>
    <td><?php echo $x['kapasitas']?></td>
    <td>
    <?php
    if ($x['status'] == true) {
        echo 'Tersedia';
    } else {
        echo 'Tidak Tersedia';
    }
    ?>
</td>


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
