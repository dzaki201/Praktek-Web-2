<?php
    class manusia{
     protected $nama_saya="Muhammad Fikri";

        function panggil_nama(){
            return "nama depan saya : {$this->nama_saya}";
        }
    }

    class mahasiswa extends manusia{
        private $nama_mahasiswa="Dzaki Sugiyanto";

        function panggil_mahaiswa(){
            return "nama belakang saya : {$this->nama_mahasiswa}";
        }
    }

    $informatika=new manusia();
    $informatika=new mahasiswa();

    $informatika->panggil_nama();
    $informatika->panggil_mahaiswa();

    echo  $informatika->panggil_nama(). "</br>";
    echo  $informatika->panggil_mahaiswa(). "</br>";
?>