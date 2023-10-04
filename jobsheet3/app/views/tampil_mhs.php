<?php
include '../classes/database.php';
$db=new database;
?>

<h3>Data Mahasiswa</h3>
<a href="input_mhs.php">Tambah Mahasiswa</a>
<table border="1">
<tr>
    <th>No</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>
<?php
$no=1;
foreach($db->tampil_mahasiswa()as $x){
    ?>
<tr>
    <td><?php echo $no++?></td>
    <td><?php echo $x['NIM']?></td>
    <td><?php echo $x['Nama']?></td>
    <td><?php echo $x['Alamat']?></td>
    <td>
        <a href="edit_mhs.php">edit</a>
        <a href="hapus_mhs.php">hapus</a>
    </td>
</tr>
<?php
}
?>
</table>