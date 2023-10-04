<?php

class database{
    var $host="localhost";
    var $username="root";
    var $password="";
    var $db= "akademik";
    var $koneksi;

    function __construct(){
        $this->koneksi=mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }

    function tampil_mahasiswa(){
        $data=mysqli_query($this->koneksi, "select * from mahasiswa");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function tambah_mhs($NIM,$Nama,$Alamat){
        mysqli_query($this->koneksi,"insert into mahasiswa (NIM,Nama,Alamat) values('$NIM','$Nama','$Alamat')");
    }
    function edit($id){
        $data=mysqli_query($this->koneksi,"select * from mahasiswa where id='$id'");
        while ($d=mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
    function update($id,$NIM, $Nama, $Alamat){
        mysqli_query($this->koneksi,"update mahasiswa set NIM='$NIM',Nama='$Nama',Alamat='$Alamat'where id='$id'");
    }
    function hapus($id){
        mysqli_query($this->koneksi,"delete from mahasiswa where id='$id'");
    }
  
    function tampil_dosen()
    {
        $data=mysqli_query($this->koneksi, "select * from dosen");
        while($d=mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
     function tambah_dosen($nidn, $nama, $alamat){
        //  mysqli_query($this->koneksi, "insert into dosen (id, nidn, nama, alamat) values ('', '$nidn', '$Nama', '$Alamat')");
        // $sql = "INSERT INTO dosen(nidn, bama, alamat) VALUES ('$nidn','$nama','$alamat')";
        // $this->koneksi->query($sql);
        mysqli_query($this->koneksi,"insert into dosen(nidn, nama, alamat) VALUES ('$nidn','$nama','$alamat')");
    }

    function edit_dosen($id)
    {
        $data= mysqli_query($this->koneksi, "select * from dosen where id='$id'");
        while($d = mysqli_fetch_array($data)){
            $hasil[]=$d;    
        }
        return $hasil;
    }

    function update_dosen ($id, $nidn , $nama, $alamat){
        mysqli_query($this->koneksi, "update dosen set nidn='$nidn', nama='$nama', alamat='$alamat' where id='$id'");
    }

    function hapus_dosen($id){
        mysqli_query($this->koneksi,"delete from dosen where id='$id'");
    }
}