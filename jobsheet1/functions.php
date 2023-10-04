<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi</title>
</head>
<body>
    <?php
    function persegi ($s)
    {
        return $s*$s;
    }
    function lingkaran ($r)
    {
        return 3.14*$r*$r;
    }
    ?>
    <form method="POST">
        Masukkan Sisi = <input type="text" name="s"></br>
        <!-- Masukkan lebar = <input type="text" name="l"></br> -->
        Masukkan jari-jari = <input type="text" name="r"></br>
        <input type="submit" value="Submit">
    <form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $s = $_POST["s"];
        // $l = $_POST["l"];
        $r = $_POST["r"];
        echo "</br> Luas Persegi = " . persegi ($s) . "</br>";
        echo "Luas Lingkaran = " . lingkaran ($r) . "</br>";
    }
    ?>
</body>
</html>