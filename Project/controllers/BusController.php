<?php
include_once '../../models/Bus.php';
class BusController {
    private $model;
    public function __construct($db) {
        $this->model = new Bus($db); 
    }
    public function getAllBus(){
        return $this->model->getAllBus();
    }
    public function  createBus( $nopol, $tipe, $kapasitas, $status){
        return $this->model-> createBus( $nopol, $tipe, $kapasitas, $status);  
    }public function getBusById($id_bus){
        return $this->model->getBusById($id_bus);
    }
    public function updateBus($id_bus, $nopol, $tipe, $kapasitas, $status){
        return $this->model->updateBus($id_bus, $nopol, $tipe, $kapasitas, $status);
    }    
    public function deleteBus($id_bus){
        return $this->model->deleteBus($id_bus);
    }
    
}