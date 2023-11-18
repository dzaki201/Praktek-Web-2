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
}