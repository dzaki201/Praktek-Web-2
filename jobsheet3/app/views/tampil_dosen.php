<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    <title>SIAKAD</title>
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


<body>
    <?php
    //memanggil class database
    include'../classes/database.php'; 
    //instansiasi class database
    $db = new database;
    ?>

    <div class="px-5">
    <h3>Data Dosen</h3>
    <a href="input_dosen.php" class="btn btn-primary mb-3 mt-3">Tambah Dosen</a>
    <table class="table table-bordered border-primary" > 
        <tr>
            <th>No</th>
            <th>NIDN</th>
            <th>Nama</th>
            <th>Alamat</th></th>
        </tr>
    <?php
    $no =1;
    foreach ($db->tampil_dosen() as $x){
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['nidn'] ?></td>
            <td><?php echo $x['nama'] ?></td>
            <td><?php echo $x['alamat'] ?></td>
            <td>

            <a href ="edit_dosen.php?id=<?php echo $x['id']; ?>&aksi=edit" class="btn btn-warning">Edit</a>
            <a href ="proses_dosen.php?id=<?php echo $x['id']; ?>&aksi=hapus" class="btn btn-danger">Hapus</a>
            </td>
        </tr>

        
    <?php
    }
    ?>
    </table>
    </div>
    </div>
</body>
</html>