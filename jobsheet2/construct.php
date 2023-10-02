<?php

    class mahasiswa{
        var $nim;
        var $alamat;
        var $nama;
        function __construct(){
            echo "Saya Mahasiswa Teknik Informatika </br>";
            
        }
        function __destruct(){
            echo "Politeknik Negeri Cilacap </br>";
        }

        function tampil_nama(){
            return "Nama saya adalah abdau </br>"; 
        }
        
        function tampil_mahasiswa(){
            return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah </br>";
        }

        function tampil_alamat(){
            
        }
    }


    $nama_mahasiswa=new mahasiswa();
  

    echo $nama_mahasiswa->tampil_nama();
    echo $nama_mahasiswa->tampil_mahasiswa();

?>