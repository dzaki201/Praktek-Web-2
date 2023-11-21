<?php

include_once '../../config.php';
include_once '../../controllers/BusController.php';

$database=new database;
$db=$database->getKoneksi();
$busController = new BusController($db);
$bus = $busController->getAllBus();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    <title>SIPEBUS</title>
</head>

 
<div class="px-5 py-4 ">
<h3 class="text-center mb-5">Tambah Data Pesanan</h3>
<form action="proses_tambah.php" method="post">
<!-- <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">ID Bus</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="id">
        </div>
    </div> -->
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Nama Pemesan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="nama">
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Tanggal Pemesanan</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" name="tanggal">
        </div>
    </div>
    <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Pilih Bus</label>
    <div class="col-sm-10">
        <select name="pesanan" class="form-select" aria-label="Default select example">
            <option selected>Pilih Bus</option>
            <?php foreach ($bus as $data) : ?>
                <?php if ($data['status'] == 1) : ?>
                    <option value="<?php echo 'NO '. $data['id'] . '-' . $data['tipe']; ?>"><?php echo $data['id'] . ' - ' . $data['tipe']; ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
    </div>
    </div>


</div>
    <div class="mb-3 row ">
        <div class="col-sm-2"></div>
    <button type="submit" name="submit" value="Simpan" class="btn btn-primary col-sm-10">Simpan</button>
    </div>
    
</form>
</div>




