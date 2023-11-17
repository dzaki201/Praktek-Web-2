<?php
class pasien{
    var $no_rm;
    var $nama_pasien;
    var $alamat;
    var $tanggal_lahir;

    
    function __construct(){
        $no_rm="no_rm"; 
        $nama_pasien="nama_pasien";
        $alamat="alamat";
        $tanggal_lahir="tanggal_lahir";
    }
    function tampilkan_pasien(){
        return $this->no_rm. $this->nama_pasien. $this->alamat. $this->tanggal_lahir;
    }
}

class orang extends pasien{
    var $umur;

    function tampil_umur(){
        
    }
}

class database{
    var $host="localhost";
    var $username="root";
    var $password="";
    var $db= "akademik";
    var $koneksi;

    function __construct(){
        $this->koneksi=mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }

    function tampil_data(){
        $data=mysqli_query($this->koneksi, "select * from pasien");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function tambah_pasien($no_rm,$nama_pasien,$alamat,$tanggal_lahir){
        mysqli_query($this->koneksi,"insert into pasien (no_rm,nama_pasien,alamat,tanggal_lahir) values('$no_rm','$nama_pasien','$alamat','$tanggal_lahir')");
    }
    function edit_pasien($id){
        $data=mysqli_query($this->koneksi,"select * from pasien where id='$id'");
        while ($d=mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
    function update_pasien($id,$no_rm,$nama_pasien,$alamat,$tanggal_lahir){
        mysqli_query($this->koneksi,"update pasien set no_rm='$no_rm',nama_pasien='$nama_pasien',alamat='$alamat',tanggal_lahir='$tanggal_lahir where id='$id'");
    }
    function hapus_pasien($id){
        mysqli_query($this->koneksi,"delete from pasien where id='$id'");
    }
}