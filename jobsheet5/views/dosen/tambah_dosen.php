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
<h3>Tambah Data Dosen</h3>
<form action="proses_tambah.php?" method="post">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">NIM</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nidn" >
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" >
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" cols="30" rows="5"></textarea>
    </div>
    <button type="submit" name="submit" value="Simpan" class="btn btn-primary">Simpan</button>
</form>
</div>




