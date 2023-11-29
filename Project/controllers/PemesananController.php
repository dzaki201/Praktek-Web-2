<?php
include_once '../../models/Pemesanan.php';
class PemesananController {
    private $model;
    public function __construct($db) {
        $this->model = new Pemesanan($db); 
    }
    public function getAllPemesanan(){
        return $this->model->getAllPemesanan();
    }
    public function createPemesanan($nama, $tanggal, $id_bus, $harga, $nama_rute){
        return $this->model->createPemesanan($nama, $tanggal, $id_bus, $harga, $nama_rute);  
    }
    public function getPemesananById($id){
        return $this->model->getPemesananById($id);
    }
    public function updatePemesanan($id, $nama, $tanggal, $id_bus, $harga, $nama_rute){
        return $this->model->updatePemesanan($id, $nama, $tanggal, $id_bus, $harga, $nama_rute);
    } 
    public function deletePemesanan($id){
        return $this->model->deletePemesanan($id);
    }  
    public function updateStatus($id, $status_pembayaran){
        return $this->model->updateStatus($id, $status_pembayaran);
    }
}