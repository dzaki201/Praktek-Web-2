<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi</title>
</head>
<body>
    <?php
    function persegi_panjang ($p, $l)
    {
        return $p*$l;
    }
    function lingkaran ($r)
    {
        return 3.14*$r*$r;
    }
    ?>
    <form method="POST">
        Masukkan Panjang = <input type="text" name="p"></br>
        Masukkan lebar = <input type="text" name="l"></br>
        Masukkan jari-jari = <input type="text" name="r"></br>
        <input type="submit" value="Submit">
    <form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $p = $_POST["p"];
        $l = $_POST["l"];
        $r = $_POST["r"];
        echo "</br> Luas Persegi Panjang = " . persegi_panjang ($p,$l) . "</br>";
        echo "Luas Lingkaran = " . lingkaran ($r) . "</br>";
    }
    ?>
</body>
</html>