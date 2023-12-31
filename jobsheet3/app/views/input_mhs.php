<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    <title>SIAKAD</title>
</head>
<section class="container">

<div class="px-3 py-3">
    <div class="col-12">
        <h3 class="text-center">Tambah Data Mahasiswa</h3>
    </div>
    
    <form action="proses_mhs.php?aksi=tambah" method="post">
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">NIM</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="NIM">
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Nama">
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="Alamat" rows="5"></textarea>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-10 offset-sm-2">
            <button type="submit" value="Simpan" class="btn btn-primary">Simpan</button>
        </div>
    </div>
</form>
</div>

</section>




