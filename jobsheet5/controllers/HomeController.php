<?php
class HomeController {
    public function home() {
        header("Location: http://localhost:8080/jobsheet5/index.php");
        exit(); // Pastikan bahwa skrip berhenti setelah pengalihan
    }

    public function mahasiswa() {
        header("Location: http://localhost:8080/jobsheet5/views/mahasiswa/index.php");
        exit(); // Pastikan bahwa skrip berhenti setelah pengalihan
    }

    public function dosen() {
        header("Location: http://localhost:8080/jobsheet5/views/dosen/index.php");
        exit(); // Pastikan bahwa skrip berhenti setelah pengalihan
    }
}