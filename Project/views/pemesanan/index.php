<!DOCTYPE html>
<html lang="en">

<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/PemesananController.php';
require '../../index.php';
//instansiasi class database
$database = new database;
$db = $database->getKoneksi();

$pemesananController = new PemesananController($db);
$pemesanan = $pemesananController->getAllPemesanan();
?>

<body>
    <div class="container">
        <div class="normal-table-list">
            <h3>Data Bus</h3>
            <a href="tambahpemesanan" class="btn btn-primary mb-2">Tambah Pesanan</a>
            <table border="1" class="table table-bordered border-primary table-striped">



                <tr>
                    <th>No</th>
                    <th>ID Pemesanan</th>
                    <th>Nama Pemesan</th>
                    <th>Tanggal</th>
                    <th>Nama Rute (id)</th>
                    <th>Pesanan Bus (id)</th>
                    <th>Harga</th>
                    <th>Aksi</th>

                    <?php
                    $no = 1;
                    foreach ($pemesanan as $x) {
                        ?>
                    <tr>
                        <td>
                            <?php echo $no++ ?>
                        </td>
                        <td>
                            <?php echo $x['id'] ?>
                        </td>
                        <td>
                            <?php echo $x['nama'] ?>
                        </td>
                        <td>
                            <?php echo $x['tanggal'] ?>
                        </td>
                        <td>
                            <?php echo $x['nama_rute'] ?>
                        </td>
                        <td>
                            <?php echo $x['id_bus'] ?>
                        </td>
                        <td>
                            <?php echo "Rp." . number_format($x['harga'], 0, ',', '.'); ?>
                        </td>
                        <td>
                            <a href="editpemesanan?id=<?php echo $x['id']; ?>" class="btn btn-warning">edit</a>
                            <a href="hapuspemesanan?id=<?php echo $x['id']; ?>" class="btn btn-danger"
                                onclick="return confirm('Apakah Yakin akan menghapus?')">hapus</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
            </table>
        </div>
    </div>


</body>

</html>