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
<h3>Tambah Data Dosen</h3>
<form action="prosesdosen" method="post">
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">NIDN</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="" name="nidn" >
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="" name="nama" >
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
        <textarea class="form-control" id="" name="alamat" cols="30" rows="5"></textarea>
        </div>
    </div>
    <div class="mb-3 row ">
        <div class="col-sm-2"></div>
    <button type="submit" name="submit" value="Simpan" class="btn btn-primary col-sm-10">Simpan</button>
    </div>
   
</form>
</div>
</section>




