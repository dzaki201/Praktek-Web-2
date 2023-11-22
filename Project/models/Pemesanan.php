<?php

class pemesanan {
    private $koneksi;
    public function __construct($db) {
        $this->koneksi = $db;
    }

    public function getAllPemesanan() {
        
        $query = "SELECT * FROM pemesanan INNER JOIN bus_wisata ON pemesanan.id_bus= bus_wisata.id_bus ";
        $result = mysqli_query($this->koneksi, $query); 
        return $result;
    }
    public function createPemesanan($nama, $tanggal, $id_bus ) {
        $query = "INSERT INTO pemesanan (nama, tanggal, id_bus) 
                  VALUES ('$nama', '$tanggal', '$id_bus')";
        $result = mysqli_query($this->koneksi, $query);
    
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function getPemesananById($id) { 
        $query = "SELECT * FROM pemesanan  INNER JOIN bus_wisata ON pemesanan.id_bus= bus_wisata.id_bus WHERE id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updatePemesanan($id, $nama, $tanggal, $id_bus ){
        $query = "UPDATE pemesanan SET nama='$nama', tanggal='$tanggal', id_bus='$id_bus' WHERE id='$id'";
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