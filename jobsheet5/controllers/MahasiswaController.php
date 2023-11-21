<?php
include_once '../../models/Mahasiswa.php';
class MahasiswaController {
    private $model;
    public function __construct($db) {
        $this->model = new Mahasiswa($db); 
    }public function getAllMahasiswa(){
        return $this->model->getAllMahasiswa();
    }
    public function createMahasiswa($NIM,$Nama,$Tempat_Lahir,$Tanggal_Lahir,$Jenis_Kelamin,$Agama,$Alamat){
        return $this->model->createMahasiswa($NIM,$Nama,$Tempat_Lahir,$Tanggal_Lahir,$Jenis_Kelamin,$Agama,$Alamat);  
    }
    public function getMahasiswaById($id){
        return $this->model->getMahasiswaById($id);
    }
    public function updateMahasiswa($id,$NIM,$Nama,$Tempat_Lahir,$Tanggal_Lahir,$Jenis_Kelamin,$Agama,$Alamat){
        return $this->model->updateMahasiswa($id,$NIM,$Nama,$Tempat_Lahir,$Tanggal_Lahir,$Jenis_Kelamin,$Agama,$Alamat);
    }
    
    public function deleteMahasiswa($id){
        return $this->model->deleteMahasiswa($id);
    }

    
}