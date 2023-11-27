<?php

include_once '../../config.php';
include_once '../../controllers/BusController.php';

$database = new database;
$db = $database->getKoneksi();

if (isset($_POST['submit'])) {
    $nopol = $_POST['nopol'];
    $tipe = $_POST['tipe'];
    $kapasitas = $_POST['kapasitas'];
    $status = $_POST['status'];

    $busController = new BusController($db);
    $result = $busController->createBus($nopol, $tipe, $kapasitas, $status);
    if ($result) {
        header("location:bus");
    } else {
        header("location:tambahbus");
    }
}