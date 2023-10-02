<?php

    class mahasiswa{
        var $nim;
        var $alamat;
        var $nama;
        function tampil_nama(){
            return "Nama saya adalah abdau </br>"; 
        }
    
        function tampil_alamat(){
            
        }
    }

    class dosen{
        var $nidn;
        var $prodi;
        var $nama;
        function tampil_nama_dosen(){
            return "Nama saya adalah Dzaki </br>"; 
        }

    }

    $nama_mahasiswa=new mahasiswa();
    $nama_dosen=new dosen;

    echo $nama_mahasiswa->tampil_nama();
    echo $nama_dosen->tampil_nama_dosen();

?>