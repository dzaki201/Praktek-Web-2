<?php

include_once '../../config.php';
include_once '../../controllers/RuteController.php';

$database = new database;
$db = $database->getKoneksi();



if (isset($_GET['id_rute'])) {
    $id_rute = $_GET['id_rute'];

    $ruteController = new RuteController($db);
    $ruteData = $ruteController->getRuteById($id_rute);

    if ($ruteData) {
        if (isset($_POST['submit'])) {
            $nama_rute = $_POST['nama_rute'];
            $jarak = $_POST['jarak'];
            $harga = $_POST['harga'];

            $result = $ruteController->updateRute($id_rute, $nama_rute, $jarak, $harga);
            if ($result) {
                header("location:rute");
            } else {
                header("location:editrute");
            }
        }
    } else {
        echo "Rute tidak ditemukan";
    }
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SIPEBUS</title>
</head>
<section class="container">
    <div class="px-3 py-3">
        <h3 class="text-center mb-3">Edit Data Rute</h3>
        <?php if ($ruteData) { ?>
            <form action="" method="post">
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="id_rute" value="<?php echo $ruteData['id_rute'] ?>"
                            disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Nama Rute</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_rute"
                            value="<?php echo $ruteData['nama_rute'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Jarak</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jarak" value="<?php echo $ruteData['jarak'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="harga" value="<?php echo $ruteData['harga'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-2"></div>
                    <button type="submit" name="submit" value="Simpan" class="btn btn-primary col-sm-10">Simpan</button>
                </div>
            </form>
        <?php } ?>
    </div>
</section>