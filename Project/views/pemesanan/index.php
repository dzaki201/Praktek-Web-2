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
            <h3>Data Pemesanan</h3>
            <a href="tambahpemesanan" class="btn btn-primary mb-2">Tambah Pesanan</a>
            <table border="1" class="table table-bordered border-primary table-striped">



                <tr>
                    <th>No</th>
                    <th>ID pemesanan </th>
                    <th>Nama Pemesan</th>
                    <th>Tanggal</th>
                    <th>Rute (id)</th>
                    <th>Bus (id)</th>
                    <th>Total Harga</th>
                    <th>Status</th>
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
                            <?php echo ($x['status_bayar'] == 0) ? 'Belum Dibayar' : 'Lunas'; ?>
                        </td>
                        <td>
                            <a href="editpemesanan?id=<?php echo $x['id']; ?>" class="btn btn-warning"><i class="notika-icon notika-edit"></i></a>
                            <a href="hapuspemesanan?id=<?php echo $x['id']; ?>" class="btn btn-danger"
                                onclick="return confirm('Apakah Yakin akan menghapus?')"><i class="notika-icon notika-trash"></i></a>
                            <a href="pembayaran?id=<?php echo $x['id']; ?>" class="btn btn-success"><i class="notika-icon notika-next"></i></a>
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