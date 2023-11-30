<!DOCTYPE html>
<html lang="en">
<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/BusController.php';
require '../../index2.php';
//instansiasi class database
$database = new database;
$db = $database->getKoneksi();

$busController = new BusController($db);
$bus = $busController->getAllBus();
?>

<body>
    <div class="container">
        <div class="normal-table-list">
            <h3>Data Bus</h3>
            <a href="tambahbus" class="btn btn-primary mb-2">Tambah Bus</a>

            <table border="1" class="table table-bordered border-primary  table-striped">
                <tr>
                    <th>No</th>
                    <th>Nomor Lambung</th>
                    <th>Nomor Polisi</th>
                    <th>Tipe</th>
                    <th>Kapasitas</th>
                    <th>Status Operasi Bus</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $no = 1;
                foreach ($bus as $x) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $no++ ?>
                        </td>
                        <td>
                            <?php echo $x['id_bus'] ?>
                        </td>
                        <td>
                            <?php echo $x['nopol'] ?>
                        </td>
                        <td>
                            <?php echo $x['tipe'] ?>
                        </td>
                        <td>
                            <?php echo $x['kapasitas'] ?>
                        </td>
                        <td>
                            <?php
                            if ($x['status'] == true) {
                                echo 'Tersedia';
                            } else {
                                echo 'Tidak Tersedia';
                            }
                            ?>
                        </td>


                        <td>
                            <a href="editbus?id_bus=<?php echo $x['id_bus']; ?>" class="btn btn-warning"><i
                                    class="notika-icon notika-edit"></i></a>
                            <a href="hapusbus?id_bus=<?php echo $x['id_bus']; ?>" class="btn btn-danger"
                                onclick="return confirm('Apakah Yakin akan menghapus?')"><i
                                    class="notika-icon notika-trash"></i></a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
    </div>

</body>

</html>