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
    public function createBus($id, $nopol, $tipe, $kapasitas){
        return $this->model->createBus($id, $nopol, $tipe, $kapasitas);  
    }public function getBusById($id){
        return $this->model->getBusById($id);
    }
    public function updateBus($id, $nopol, $tipe, $kapasitas, $status){
        return $this->model->updateBus($id, $nopol, $tipe, $kapasitas, $status);
    }    
    public function deleteBus($id){
        return $this->model->deleteBus($id);
    }
    
}