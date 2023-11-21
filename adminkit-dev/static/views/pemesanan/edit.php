<?php

include_once '../../config.php';
include_once '../../controllers/PemesananController.php';
include_once '../../controllers/BusController.php';
require'../../index.php';

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
            $pesanan=$_POST['pesanan'];

            $result=$pemesananController->updatePemesanan($id, $nama, $tanggal, $pesanan );
            if($result){
                header("location:index.php");
            }else{
                header("location:edit.php");
            }
        }
    }else{
        echo"Dosen tidak ditemukan";
    }
}
?>

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
    <label class="col-sm-2 col-form-label">Pesanan Bus</label>
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
    <div class="mb-3 row">
        <div class="col-sm-2"></div>
        <button type="submit" name="submit" value="Simpan" class="btn btn-primary col-sm-10">Simpan</button>
        </div>
    </div>
    <?php } ?>
</form>
</section>




