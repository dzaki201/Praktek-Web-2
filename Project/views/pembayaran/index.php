<?php
include_once '../../config.php';
include_once '../../controllers/PemesananController.php';
include_once '../../controllers/BusController.php';
include_once '../../controllers/RuteController.php';
require '../../index.php';
$database = new database;
$db = $database->getKoneksi();

$busController = new BusController($db);
$bus = $busController->getAllBus();
$ruteController = new RuteController($db);
$rute = $ruteController->getAllRute();
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $pemesananController = new PemesananController($db);
    $pemesananData = $pemesananController->getPemesananById($id);

    if ($pemesananData) {
        if (isset($_POST['submit'])) {
            $status_pembayaran = '1';

            $result = $pemesananController->updateStatus($id, $status_pembayaran);

            // if ($result) {
            //     // Redirect ke halaman pemesanan setelah pembayaran berhasil
            //     header("location:pemesanan");
            // } else {
            //     // Redirect ke halaman editpemesanan jika terjadi kesalahan
            //     header("location:pembayaran");
            // }
        }
    } else {
        echo "Pemesanan tidak ditemukan";
    }
}
?>



<div class="container">
    <div class="normal-table-list">

        <div class="row ">
            <div class="col-sm-11"></div>
            <a href="pemesanan" class="btn btn-default btn-icon-notika waves-effect"><i
                    class="notika-icon notika-left-arrow"></i></a>
        </div>


        <h3>Pembayaran</h3>
        <form action="" method="post">
            <?php if ($pemesananData) { ?>
                <table border="1" class="table table-bordered border-primary table-condensed">

                    <tr>

                        <th>ID pemesanan </th>
                        <th>
                            <?php echo $pemesananData['id'] ?>
                        </th>
                    </tr>
                    <tr>
                        <th>Nama Pemesan</th>
                        <th>
                            <?php echo $pemesananData['nama'] ?>
                        </th>
                    </tr>
                    <tr>
                        <th>Tanggal</th>
                        <th>
                            <?php echo $pemesananData['tanggal'] ?>
                        </th>
                    </tr>
                    <tr>
                        <th>Rute (id)</th>
                        <th>
                            <?php echo $pemesananData['nama_rute'] ?>
                        </th>
                    </tr>
                    <tr>
                        <th>Bus (id)</th>
                        <th>
                            <?php echo $pemesananData['id_bus'] ?>
                        </th>
                    </tr>
                    <tr>
                        <th>Total Harga</th>
                        <th>
                            <?php echo "Rp." . number_format($pemesananData['harga'], 0, ',', '.'); ?>
                        </th>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <th>
                            <?php echo ($pemesananData['status_bayar'] == 0) ? 'Belum Dibayar' : 'Lunas'; ?>
                        </th>
                    </tr>
                </table>
            <?php } ?>

            <div class="row ">
                <div class="col-sm-2"></div>
                <button type="submit" name="submit" value="Simpan" class="btn btn-success col-sm-10">Bayar</button>

            </div>


        </form>
    </div>
</div>

</html>