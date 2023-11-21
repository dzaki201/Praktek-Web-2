<?php

class mahasiswa {
    private $koneksi;
    public function __construct($db) {
        $this->koneksi = $db;
    }

    public function getAllMahasiswa() {
        $query = "SELECT * FROM mahasiswa";
        $result = mysqli_query($this->koneksi, $query); 
        return $result;
    }
    public function createMahasiswa($NIM,$Nama,$Tempat_Lahir,$Tanggal_Lahir,$Jenis_Kelamin,$Agama,$Alamat) {
        $query = "INSERT INTO mahasiswa(NIM,Nama,Tempat_Lahir,Tanggal_Lahir,Jenis_Kelamin,Agama,Alamat)
        VALUES('$NIM','$Nama','$Tempat_Lahir','$Tanggal_Lahir','$Jenis_Kelamin','$Agama','$Alamat')";
        $result = mysqli_query($this->koneksi, $query); 
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public function getMahasiswaById($id) { 
        $query = "SELECT * FROM mahasiswa WHERE id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateMahasiswa($id,$NIM,$Nama,$Tempat_Lahir,$Tanggal_Lahir,$Jenis_Kelamin,$Agama,$Alamat){
        $query = "UPDATE mahasiswa SET NIM='$NIM', Nama='$Nama', Tempat_Lahir='$Tempat_Lahir', Tanggal_Lahir='$Tanggal_Lahir', Jenis_Kelamin='$Jenis_Kelamin', Agama='$Agama', Alamat='$Alamat' WHERE id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        } else {
            return false;
        }
    }
    
    public function deleteMahasiswa($id) {
        $query = "DELETE FROM mahasiswa WHERE id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }

}