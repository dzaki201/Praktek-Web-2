<?php
include '../classes/database.php';
$db=new database;
?>

<h3>Data Pasien</h3>
<a href="input_pasien.php">Tambah Pasien</a>

<table border="1" >
<tr>
    <th>No</th>
    <th>NO RM</th>
    <th>Nama Pasien</th>
    <th>Alamat</th>
    <th>Tanggal Lahir</th>
    <th>Aksi</th>
</tr>
<?php
$no=1;
foreach($db->tampil_data()as $x){
?>
<tr>
    <td><?php echo $no++?></td>
    <td><?php echo $x['no_rm']?></td>
    <td><?php echo $x['nama_pasien']?></td>
    <td><?php echo $x['alamat']?></td>
    <td><?php echo $x['tanggal_lahir']?></td>
    <td>
        <a href="edit_pasien.php?id=<?php echo $x['id'];?>&aksi=edit" >edit</a>
        <a href="proses_pasien.php?id=<?php echo $x['id'];?>&aksi=hapus" >hapus</a>
    </td>
</tr>

<?php
}
?>
</table>

<h4>Note: langkah untuk menghapus data pasien </h4>
1. Pilih data yang akan dihapus
<br>
2. klik hapus pada bagian kolom aksi untuk menghapus data
