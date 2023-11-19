<?php
class HomeController{
    public function home(){
        header("http://localhost:8080/jobsheet5/index.php");
    }
    public function mahasiswa(){
        header("http://localhost:8080/jobsheet5/views/mahasiswa/index.php");
    }
}