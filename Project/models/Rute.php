<?php

class rute {
    private $koneksi;
    public function __construct($db) {
        $this->koneksi = $db;
    }

    public function getAllRute() {
        $query = "SELECT * FROM rute";
        $result = mysqli_query($this->koneksi, $query); 
        return $result;
    }
    public function createrute( $nama_rute, $jarak ) {
        $query = "INSERT INTO rute (nama_rute, jarak) 
                  VALUES ('$nama_rute', '$jarak')";
        $result = mysqli_query($this->koneksi, $query);
    
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function getRuteById($id_rute) { 
        $query = "SELECT * FROM rute WHERE id_rute ='$id_rute'";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateRute($id_rute, $nama_rute, $jarak){
        $query = "UPDATE rute SET nama_rute='$nama_rute', jarak='$jarak' WHERE id_rute='$id_rute'";
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        } else {
            return false;
        }
    }
    public function deleteRute($id_rute) {
        $query = "DELETE FROM rute WHERE id_rute='$id_rute'";
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public function checkRute($nama_rute) {
        $query = "SELECT COUNT(*) as count FROM rute WHERE id_rute = '$nama_rute'";
        $result = mysqli_query($this->koneksi, $query);
        $data = mysqli_fetch_assoc($result);
    
        // Jika count lebih dari 0, artinya data sudah ada
        if ($data['count'] > 0) {
            return true;
        } else {
            return false;
        }
    }
}