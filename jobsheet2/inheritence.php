<?php
    class manusia{
        public $nama_saya;

        function panggil_nama($saya){
            $this->nama_saya=$saya;
        }
    }

    class mahasiswa extends manusia{
        public $nama_mahasiswa;

        function panggil_mahaiswa($mahasiswa){
            $this->nama_mahasiswa=$mahasiswa;
        }
    }

    $informatika=new mahasiswa();

    $informatika->panggil_nama("Muhammad Fikri");
    $informatika->panggil_mahaiswa("Dzaki Sugiyanto");

    echo "Nama Depan Saya : ". $informatika->nama_saya. "</br>";
    echo "Nama Belakang : ". $informatika->nama_mahasiswa. "</br>";
?>