<?php

include_once '../../config.php';
include_once '../../controllers/BusController.php';
include_once '../../controllers/RuteController.php';
require '../../index.php';

$database = new database;
$db = $database->getKoneksi();
$busController = new BusController($db);
$bus = $busController->getAllBus();
$ruteController = new RuteController($db);
$rute = $ruteController->getAllRute();
$id_bus = isset($_GET['id_bus']) ? $_GET['id_bus'] : '';
$id_rute = isset($_GET['id_rute']) ? $_GET['id_rute'] : '';
$tanggal = isset($_GET['tanggal']) ? $_GET['tanggal'] : '';
?>
<section class="container">
    <div class="px-5 py-4 ">
        <h3 class="text-center mb-5">Tambah Data Pesanan</h3>

        <?php
        if (isset($_GET['status']) && $_GET['status'] === 'failed') {
            // Display an alert if the reservation failed
            echo '<div class="alert alert-danger text-center" role="alert">Pemesanan gagal! Bus sudah tidak tersedia untuk tanggal tersebut.</div>';
        }
        ?>
        <form action="prosespemesanan" method="post" onsubmit="return validateForm()">

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Nama Pemesan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Tanggal Pemesanan</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal"
                        value="<?php echo isset($_GET['tanggal']) ? $_GET['tanggal'] : ''; ?>">
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Rute Bus</label>
                <div class="col-sm-10">
                    <select name="id_rute" class="form-select" aria-label="Default select example">
                        <option selected>Pilih Rute</option>
                        <?php foreach ($rute as $data): ?>
                            <option value="<?php echo $data['id_rute']; ?>" <?php echo ($id_rute == $data['id_rute']) ? 'selected' : ''; ?>>
                                <?php echo $data['nama_rute']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Pesan Bus</label>
                <div class="col-sm-10">
                    <select name="id_bus" class="form-select" aria-label="Default select example">
                        <option selected>Pilih Bus</option>
                        <?php foreach ($bus as $data): ?>
                            <?php if ($data['status'] == 1): ?>
                                <option value="<?php echo $data['id_bus']; ?>" <?php echo ($id_bus == $data['id_bus']) ? 'selected' : ''; ?>>
                                    <?php echo $data['id_bus'] . ' - ' . $data['tipe']; ?>
                                </option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="mb-3 row ">
                <div class="col-sm-2"></div>
                <button type="submit" name="submit" value="Simpan" class="btn btn-primary col-sm-10">Simpan</button>
            </div>

        </form>
    </div>
</section>