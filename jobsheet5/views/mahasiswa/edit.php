<?php

include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

$database=new database;
$db=$database->getKoneksi();

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $mahasiswaController=new MahasiswaController($db);
    $mahasiswaData=$mahasiswaController->getMahasiswaById($id);

    if($mahasiswaData){
        if(isset($_POST['submit'])){
            $NIM=$_POST['NIM'];
            $Nama=$_POST['Nama'];
            $Tempat_Lahir=$_POST['Tempat_Lahir'];
            $Tanggal_Lahir=$_POST['Tanggal_Lahir'];
            $Jenis_Kelamin=$_POST['Jenis_Kelamin'];
            $Agama=$_POST['Agama'];
            $Alamat=$_POST['Alamat'];

            $result=$mahasiswaController->updateMahasiswa($id,$NIM,$Nama,$Tempat_Lahir,$Tanggal_Lahir,$Jenis_Kelamin,$Agama,$Alamat);
            if($result){
                header("location:mahasiswa");
            }else{
                header("location:editmahasiswa");
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
    <h3 class="text-center mb-3">Edit Data Mahasiswa</h3>
    <?php
    if ($mahasiswaData){
    ?>
    <form action="" method="post">
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="id" value="<?php echo $mahasiswaData['id'] ?>" disabled>
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">NIM</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="NIM" value="<?php echo $mahasiswaData['NIM'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Nama" value="<?php echo $mahasiswaData['Nama'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label  class="col-sm-2 col-form-label">Tempat Lahir</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="" name="Tempat_Lahir" value="<?php echo $mahasiswaData['Tempat_Lahir'] ?>" >
        </div>
    </div>
    <div class="mb-3 row">
        <label  class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="" name="Tanggal_Lahir" value="<?php echo $mahasiswaData['Tanggal_Lahir'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-10">
        <select name="Jenis_Kelamin" class="form-select" aria-label="Default select example">
            <?php
            $jenisKelaminOptions = ['Laki-Laki', 'Perempuan'];
            foreach ($jenisKelaminOptions as $option) {
                $selected = ($mahasiswaData['Jenis_Kelamin'] == $option) ? 'selected' : '';
                echo "<option value='$option' $selected>$option</option>";
            }?>
            </select>
        </div>
        </div>
        <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Agama</label>
        <div class="col-sm-10">
            <select name="Agama" class="form-select" aria-label="Default select example">
                <?php
                $agamaOptions = ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Konghucu'];
                foreach ($agamaOptions as $option) {
                    $selected = ($mahasiswaData['Agama'] == $option) ? 'selected' : '';
                    echo "<option $selected>$option</option>";
                }
                ?>
            </select>
        </div>
            </div>
        <div class="mb-3 row">
            <label  class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10"> 
                <textarea class="form-control"  name="Alamat" cols="30" rows="5"><?php echo $mahasiswaData['Alamat']?></textarea>
            </div>
        </div>
        <div class="mb-3 row ">
            <div class="col-sm-2"></div>
        <button type="submit" name="submit" value="Simpan" class="btn btn-primary col-sm-10">Simpan</button>
        </div>
        <?php
        
        }
        ?>
    </form>
</div>
</section>




