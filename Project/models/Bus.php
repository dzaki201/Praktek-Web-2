<?php

class bus
{
    private $koneksi;
    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllBus()
    {
        $query = "SELECT * FROM bus_wisata";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }
    public function createBus($nopol, $tipe, $kapasitas, $status)
    {
        $query = "INSERT INTO bus_wisata (nopol, tipe, kapasitas, status) 
                  VALUES ('$nopol', '$tipe', '$kapasitas','$status')";
        $result = mysqli_query($this->koneksi, $query);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function getBusById($id_bus)
    {
        $query = "SELECT * FROM bus_wisata WHERE id_bus ='$id_bus'";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateBus($id_bus, $nopol, $tipe, $kapasitas, $status)
    {
        $query = "UPDATE bus_wisata SET nopol='$nopol', tipe='$tipe', kapasitas='$kapasitas', status='$status' WHERE id_bus='$id_bus'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function deleteBus($id_bus)
    {
        $query = "DELETE FROM bus_wisata WHERE id_bus='$id_bus'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

}