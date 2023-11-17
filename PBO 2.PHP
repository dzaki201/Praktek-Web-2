<?php

abstract class kalkulator {
    abstract public function menghitung ($angka1 ,$angka2);
}

class penjumlahan extends kalkulator{
    public function menghitung ($angka1,$angka2){
         return $angka1+$angka2;
        }
}
 
class pengurangan extends kalkulator { 
        public function menghitung ($angka1,$angka2){
            return $angka1 - $angka2;
        }
}

class perkalian extends kalkulator{
    public function menghitung($angka1, $angka2)
    {
        return $angka1 * $angka2;
    }
}

class pembagian extends kalkulator{
    public function menghitung($angka1, $angka2)
    {
        if ($angka2==0){
            return "Tidak bisa membagi dengan nol ";
        }
        return $angka1 / $angka2;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $angka1=(float)$_POST["angka1"];
    $angka2=(float)$_POST["angka2"];
 
$penjumlahan=new penjumlahan ();
$pengurangan=new pengurangan ();
$perkalian=new perkalian ();
$pembagian=new pembagian();

$hasilpenjumlahan=$penjumlahan->menghitung ($angka1,$angka2);
$hasilpengurangan=$pengurangan->menghitung ($angka1,$angka2);
$hasilperkalian=$perkalian->menghitung ($angka1,$angka2);
$hasilpembagian=$pembagian->menghitung ($angka1,$angka2);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <h3>Kalkulator</h3>
    <form action="" method="POST">
    <label for =""->Masukkan Angka : </label>
    <input type ="text" name ="angka1" id ="angka1" required>
    <br>
    <label for ="" ->Masukkan Angka : </label>
    <input type ="text" name ="angka2" id="angka2" required>
    <br>
    <input type ="submit" value ="hasil" name="submit">
    </form>
    <?php
    if (isset($_POST['submit'])){
        echo "Penjumlahan :" . $hasilpenjumlahan . "</br>";
        echo "Pengurangan :" . $hasilpengurangan . "</br>";
        echo "Perkalian :" . $hasilperkalian . "</br>";
        echo "Pembagian :" . $hasilpembagian . "</br>";
    }
    ?>
</body>
</html>