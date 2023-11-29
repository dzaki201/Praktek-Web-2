<?php

class pemesanan
{
    private $koneksi;
    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllPemesanan()
    {

        $query = "SELECT * FROM pemesanan INNER JOIN bus_wisata ON pemesanan.id_bus= bus_wisata.id_bus ";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }
    public function createPemesanan($nama, $tanggal, $id_bus, $harga, $nama_rute)
    {
        // Check if the selected bus is already reserved for the given date
        $checkQuery = "SELECT * FROM pemesanan WHERE id_bus = '$id_bus' AND tanggal = '$tanggal'";
        $checkResult = mysqli_query($this->koneksi, $checkQuery);

        if (mysqli_num_rows($checkResult) > 0) {
            // Bus is already reserved for the selected date
            return false;
        } else {
            // Bus is available, proceed with the reservation
            $query = "INSERT INTO pemesanan (nama, tanggal, id_bus, harga, nama_rute) 
                  VALUES ('$nama', '$tanggal', '$id_bus', '$harga', '$nama_rute')";
            $result = mysqli_query($this->koneksi, $query);

            if ($result) {
                return true;
            } else {
                return false;
            }
        }
    }
    public function getPemesananById($id)
    {
        $query = "SELECT * FROM pemesanan  INNER JOIN bus_wisata ON pemesanan.id_bus= bus_wisata.id_bus WHERE id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updatePemesanan($id, $nama, $tanggal, $id_bus, $harga, $nama_rute)
    {
        $query = "UPDATE pemesanan SET nama='$nama', tanggal='$tanggal', id_bus='$id_bus' , harga='$harga', nama_rute='nama_rute' WHERE id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function deletePemesanan($id)
    {
        $query = "DELETE FROM pemesanan WHERE id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}