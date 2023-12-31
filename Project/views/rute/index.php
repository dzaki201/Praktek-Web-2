<!DOCTYPE html>
<html lang="en">
<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/RuteController.php';
require '../../index2.php';
//instansiasi class database
$database = new database;
$db = $database->getKoneksi();

$ruteController = new RuteController($db);
$rute = $ruteController->getAllRute();
?>

<body>

    <div class="container">
        <div class="normal-table-list">
            <h3>Data Bus</h3>
            <a href="tambahrute" class="btn btn-primary mb-2">Tambah Rute</a>

            <table border="1" class="table table-bordered border-primary table-striped">
                <tr>
                    <th>No</th>
                    <th>ID Rute</th>
                    <th>Nama Rute</th>
                    <th>Jarak (KM)</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $no = 1;
                foreach ($rute as $x) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $no++ ?>
                        </td>
                        <td>
                            <?php echo $x['id_rute'] ?>
                        </td>
                        <td>
                            <?php echo $x['nama_rute'] ?>
                        </td>
                        <td>
                            <?php echo $x['jarak'] . " KM" ?>
                        </td>
                        <td>
                            <?php echo "Rp." . number_format($x['harga'], 0, ',', '.'); ?>
                        </td>

                        </td>


                        <td>
                            <a href="editrute?id_rute=<?php echo $x['id_rute']; ?>" class="btn btn-warning"><i
                                    class="notika-icon notika-edit"></i></a>
                            <a href="hapusrute?id_rute=<?php echo $x['id_rute']; ?>" class="btn btn-danger"
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