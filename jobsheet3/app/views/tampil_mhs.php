<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<?php
include '../classes/database.php';
$db=new database;
?>

<h3>Data Mahasiswa</h3>
<a href="input_mhs.php" class="btn btn-success">Tambah Mahasiswa</a>

<table border="1" class="table table-bordered border-primary"  >
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
        <a href="edit_mhs.php?id=<?php echo $x['id'];?>&aksi=edit" class="btn btn-warning">edit</a>
        <a href="proses_mhs.php?id=<?php echo $x['id'];?>&aksi=hapus" class="btn btn-danger">hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
</body>
</html>