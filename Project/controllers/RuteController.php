<?php
include_once '../../models/Rute.php';
class RuteController {
    private $model;
    public function __construct($db) {
        $this->model = new Rute($db); 
    }
    public function getAllRute(){
        return $this->model->getAllRute();
    }
    public function  createRute( $nama_rute, $jarak){
        return $this->model-> createRute( $nama_rute, $jarak);  
    }
    public function getRuteById($id_rute){
        return $this->model->getRuteById($id_rute);
    }
    public function updateRute($id_rute, $nama_rute, $jarak){
        return $this->model->updateRute($id_rute, $nama_rute, $jarak);
    }
    public function deleteRute($id_rute){
        return $this->model->deleteRute($id_rute);
    }
    public function checkRute($nama_rute){
        return $this->model->checkRute($nama_rute);
    }
}