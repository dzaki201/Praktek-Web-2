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
<h3>Tambah Data Mahasiswa</h3>
<form action="proses_tambah.php?" method="post">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">NIM</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="NIM" >
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="Nama" >
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="Tempat_Lahir" >
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" id="exampleFormControlInput1" name="Tanggal_Lahir" >
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
        <select name="Jenis_Kelamin" class="form-select" aria-label="Default select example">
            <option selected>Pilih Jenis Kelamin</option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Agama</label>
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
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="Alamat" cols="30" rows="5"></textarea>
    </div>
    <button type="submit" name="submit" value="Simpan" class="btn btn-primary">Simpan</button>
</form>
</div>




