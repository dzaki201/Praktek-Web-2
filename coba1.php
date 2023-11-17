<?php

class database{
    var $host="localhost";
    var $username="root";
    var $db="akademik";
    var $koneksi;

    function __construct(){
        $this->koneksi=mysqli_connect($this->host,$this->username,$this->db);
    }

    function tampil(){
        $data=mysqli_connect($this->koneksi, "select * from database");
        while($d=mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
    function tambah(){
        mysqli_connect($this->koneksi, "insert into")
    }
}