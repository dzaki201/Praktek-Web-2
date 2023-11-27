<?php

include_once '../../config.php';
include_once '../../controllers/BusController.php';

$database = new database;
$db = $database->getKoneksi();

if (isset($_GET['id_bus'])) {
    $id_bus = $_GET['id_bus'];

    $busController = new BusController($db);
    $result = $busController->deleteBus($id_bus);

    if ($result) {
        header("location:bus");
    } else {
        header("Gagal Menghapus data");
    }
}