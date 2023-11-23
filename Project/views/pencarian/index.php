<!DOCTYPE html>
<html lang="en">
<?php
// memanggil class model database
include_once '../../config.php';
include_once '../../controllers/RuteController.php';
include_once '../../controllers/BusController.php';
require '../../index.php';
// instansiasi class database
$database = new database;
$db = $database->getKoneksi();

$busController = new BusController($db);
$bus = $busController->getAllBus();

$ruteController = new RuteController($db);
$rute = $ruteController->getAllRute();
?>

<body>
    <h3 class="container mb-5">Pencarian</h3>
    <section class="container">
        <!-- Formulir pengisian nama rute dan tipe bus -->
        <form method="POST" action="">
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Nama Rute</label>
        <div class="col-sm-4">
            <select name="id_rute" class="form-select" aria-label="Default select example">
                <option selected>Pilih Rute</option>
                <?php foreach ($rute as $data) : ?>
                    <option value="<?php echo $data['id_rute']; ?>" <?php echo isset($_POST['id_rute']) && $_POST['id_rute'] == $data['id_rute'] ? 'selected' : ''; ?>><?php echo $data['nama_rute']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <label class="col-sm-2 col-form-label">Tipe Bus</label>
        <div class="col-sm-4">
            <select name="tipe" class="form-select" aria-label="Default select example">
                <option selected>Pilih Tipe Bus</option>
                <option value="Bus Micro" <?php echo isset($_POST['tipe']) && $_POST['tipe'] == 'Bus Micro' ? 'selected' : ''; ?>>Bus Micro</option>
                <option value="Bus Medium" <?php echo isset($_POST['tipe']) && $_POST['tipe'] == 'Bus Medium' ? 'selected' : ''; ?>>Bus Medium</option>
                <option value="Bus Besar" <?php echo isset($_POST['tipe']) && $_POST['tipe'] == 'Bus Besar' ? 'selected' : ''; ?>>Bus Besar</option>
                <option value="Bus Double Decker" <?php echo isset($_POST['tipe']) && $_POST['tipe'] == 'Bus Double Decker' ? 'selected' : ''; ?>>Bus Double Decker</option>
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mb-3 mx-auto d-block">Cari</button>
    </form>



        <?php
        // Pemanggilan fungsi checkRute pada form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama_rute = $_POST["id_rute"];
            $tipe_bus = $_POST["tipe"];

            $ruteController = new RuteController($db);
            $rute_tersedia = $ruteController->checkRute($nama_rute);

            if ($rute_tersedia) {
                // Tampilkan tabel bus jika rute tersedia
                echo '<div class="table-responsive">
                    <table border="1" class="table table-bordered border-primary">
                        <thead>
                            <tr>
                                <th>ID Bus</th>
                                <th>Tipe Bus</th>
                                <th>Kapasitas</th>
                                <!-- Tambahkan kolom-kolom lain sesuai kebutuhan -->
                            </tr>
                        </thead>
                        <tbody>';

                foreach ($bus as $data) {
                    if ($data['status'] == 1 && $data['tipe'] == $tipe_bus) {
                        echo '<tr>
                            <td>' . $data['id_bus'] . '</td>
                            <td>' . $data['tipe'] . '</td>
                            <td>' . $data['kapasitas'] . '</td>
                            <!-- Tambahkan kolom-kolom lain sesuai kebutuhan -->
                          </tr>';
                    }
                }

                echo '</tbody>
                </table>
            </div>';
            } else {
                // Tampilkan pesan bahwa rute tidak tersedia
                echo '<p class="mx-auto text-center">Rute tidak tersedia.</p>';
            }
        }
        ?>
    </section>
</body>

</html>
