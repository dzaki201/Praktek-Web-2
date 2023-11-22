<?php

include_once '../../config.php';
include_once '../../controllers/PemesananController.php';
include_once '../../controllers/BusController.php';

$database=new database;
$db=$database->getKoneksi();

$busController = new BusController($db);
$bus = $busController->getAllBus();

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $pemesananController=new PemesananController($db);
    $pemesananData=$pemesananController->getPemesananById($id);

    if($pemesananData){
        if(isset($_POST['submit'])){
            $nama=$_POST['nama'];
            $tanggal=$_POST['tanggal'];
            $id_bus=$_POST['id_bus'];

            $result=$pemesananController->updatePemesanan($id, $nama, $tanggal, $id_bus );
            if($result){
                header("location:pemesanan");
            }else{
                header("location:editpemesanan");
            }
        }
    }else{
        echo"Pemesanan tidak ditemukan";
    }
}
?>

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
<div class="px-5 py-4 ">
<h3 class="text-center mb-5">Edit Data Pesanan</h3>
<?php if ($pemesananData) { ?>
<form action="" method="post">
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Nama Pemesan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="nama" value="<?php echo $pemesananData['nama'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Tanggal Pemesanan</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" name="tanggal" value="<?php echo $pemesananData['tanggal'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Pesan Bus</label>
    <div class="col-sm-10">
        <select name="id_bus" class="form-select" aria-label="Default select example">
            <option selected>Pilih Bus</option>
            <?php foreach ($bus as $data) : ?>
                <?php if ($data['status'] == 1) : ?>
                    <?php
                    $selected = ($data['id_bus'] == $id_pesanan) ? 'selected' : '';
                    ?>
                    <option value="<?php echo $data['id_bus']; ?>" <?php echo $selected; ?>><?php echo $data['id_bus'] . ' - ' . $data['tipe']; ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
    </div>
</div>

    <div class="mb-3 row">
        <div class="col-sm-2"></div>
        <button type="submit" name="submit" value="Simpan" class="btn btn-primary col-sm-10">Simpan</button>
        </div>
    </div>
    <?php } ?>
</form>
</section>




