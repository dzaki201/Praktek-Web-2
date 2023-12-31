<!DOCTYPE html>
<html lang="en">

<?php
include '../classes/database.php';
$db=new database;
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
</head>
<div class="px-3 py-3">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SIAKAD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Dosen</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="px-4">
<body>


<h3>Data Mahasiswa</h3>
<a href="input_mhs.php" class="btn btn-primary mb-2">Tambah Mahasiswa</a>
<?php 

?>
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
</div>
