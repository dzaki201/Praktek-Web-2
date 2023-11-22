<?php

include_once '../../config.php';
include_once '../../controllers/DosenController.php';

$database=new database;
$db=$database->getKoneksi();

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $dosenController=new DosenController($db);
    $dosenData=$dosenController->getDosenById($id);

    if($dosenData){
        if(isset($_POST['submit'])){
            $nidn=$_POST['nidn'];
            $nama=$_POST['nama'];
            $alamat=$_POST['alamat'];

            $result=$dosenController->updateDosen($id,$nidn,$nama,$alamat);
            if($result){
                header("location:dosen");
            }else{
                header("location:editdosen");
            }
        }
    }else{
        echo"Dosen tidak ditemukan";
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    <title>SIAKAD</title>
</head>
<section class="container">
<div class="px-3 py-3">
<h3>Edit Data Dosen</h3>
<?php
if ($dosenData){
?>
<form action="" method="post">
    <?php
    foreach($dosenData as $d => $value){
    ?>
    <div class="mb-3 row">
        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label"><?php
        echo $d;
        ?>
        </label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="exampleFormControlInput1" name="<?php echo $d ?>" value="<?php echo $value ?>" >
        </div>
    </div>
    <?php
    }
    ?>
    <div class="mb-3 row ">
            <div class="col-sm-2"></div>
        <button type="submit" name="submit" value="Simpan" class="btn btn-primary col-sm-10">Simpan</button>
        </div>
    </div>
    <?php
    }
    ?>
</form>
</div>
</section>






