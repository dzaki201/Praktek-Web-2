<?php

class pemesanan {
    private $koneksi;
    public function __construct($db) {
        $this->koneksi = $db;
    }

    public function getAllPemesanan() {
        $query = "SELECT * FROM Pemesanan";
        $result = mysqli_query($this->koneksi, $query); 
        return $result;
    }
    public function createPemesanan($nama, $tanggal, $pesanan ) {
        $query = "INSERT INTO pemesanan (nama, tanggal, pesanan) 
                  VALUES ('$nama', '$tanggal', '$pesanan')";
        $result = mysqli_query($this->koneksi, $query);
    
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function getPemesananById($id) { 
        $query = "SELECT * FROM pemesanan WHERE id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updatePemesanan($id, $nama, $tanggal, $pesanan ){
        $query = "UPDATE pemesanan SET nama='$nama', tanggal='$tanggal', pesanan='$pesanan' WHERE id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        } else {
            return false;
        }
    }
    public function deletePemesanan($id) {
        $query = "DELETE FROM pemesanan WHERE id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }
}