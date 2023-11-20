<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    <title>SIAKAD</title>
</head>

 
<div class="px-5 py-4 ">
<h3 class="text-center mb-5">Tambah Data Mahasiswa</h3>
<form action="proses_tambah" method="post">
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
        <label  class="col-sm-2 col-form-label">Tempat Lahir</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="" name="Tempat_Lahir" >
        </div>
    </div>
    <div class="mb-3 row">
        <label  class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="" name="Tanggal_Lahir" >
        </div>
    </div>
    <div class="mb-3 row">
        <label  class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
        <select name="Jenis_Kelamin" class="form-select" aria-label="Default select example">
            <option selected>Pilih Jenis Kelamin</option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select>
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Agama</label>
        <div class="col-sm-10">
        <select  name="Agama" class="form-select" aria-label="Default select example">
            <option selected>Pilih Agama</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            <option value="Konghucu">Konghucu</option>
        </select>
        </div>
    </div>
    <div class="mb-3 row">
        <label  class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10"> 
            <textarea class="form-control"  name="Alamat" cols="30" rows="5"></textarea>
        </div>
    </div>
    <div class="mb-3 row ">
        <div class="col-sm-2"></div>
    <button type="submit" name="submit" value="Simpan" class="btn btn-primary col-sm-10">Simpan</button>
    </div>
    
</form>
</div>




