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
}