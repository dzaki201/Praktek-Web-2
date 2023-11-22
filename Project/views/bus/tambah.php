<html lang="en">

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
<h3 class="text-center mb-5">Tambah Data Bus</h3>
<form action="proses_tambah.php" method="post">
<!-- <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">ID Bus</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="id">
        </div>
    </div> -->
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Nomor Polisi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="nopol">
        </div>
    </div>
    <div class="mb-3 row">
        <label  class="col-sm-2 col-form-label">Tipe bus</label>
        <div class="col-sm-10">
        <select name="tipe" class="form-select" aria-label="Default select example">
            <option selected>Pilih Tipe Bus</option>
            <option value="Bus Micro">Bus Micro</option>
            <option value="Bus Medium">Bus Medium</option>
            <option value="Bus Besar">Bus Besar</option>
            <option value="Bus Double Decker">Bus Double Decker</option>
        </select>
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Kapasitas</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="kapasitas">
        </div>
    </div>
    <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Status Operasi</label>
    <div class="col-sm-10">
        <select class="form-select" aria-label="Default select example" name="status">
            <option value="1">Tersedia</option>
            <option value="0">Tidak Tersedia</option>
        </select>
    </div>
</div>


    <div class="mb-3 row ">
        <div class="col-sm-2"></div>
    <button type="submit" name="submit" value="Simpan" class="btn btn-primary col-sm-10">Simpan</button>
    </div>
    
</form>
</div>




