<?php

include_once '../../config.php';
include_once '../../controllers/BusController.php';

$database=new database;
$db=$database->getKoneksi();

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $busController=new BusController($db);
    $busData=$busController->getBusById($id);

    if($busData){
        if(isset($_POST['submit'])){
            $nopol=$_POST['nopol'];
            $tipe=$_POST['tipe'];
            $kapasitas=$_POST['kapasitas'];
            $status=$_POST['status'];

            $result=$busController->updateBus($id, $nopol, $tipe, $kapasitas, $status);
            if($result){
                header("location:index.php");
            }else{
                header("location:edit.php");
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
        <h3 class="text-center mb-3">Edit Data Bus</h3>
        <?php if ($busData) : ?>
            <form action="" method="post">
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="id" value="<?php echo $busData['id'] ?>" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Nomor Polisi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nopol" value="<?php echo $busData['nopol'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Tipe Bus</label>
                    <div class="col-sm-10">
                        <select name="tipe" class="form-select" aria-label="Default select example">
                            <?php
                            $BusOptions = ['Bus Mikro', 'Bus Medium', 'Bus Besar', 'Bus Double Decker' ];
                            foreach ($BusOptions as $option) {
                                $selected = ($busData['tipe'] == $option) ? 'selected' : '';
                                echo "<option value='$option' $selected>$option</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Kapasitas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="kapasitas" value="<?php echo $busData['kapasitas'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Status Operasi</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="status">
                        <?php
                        $StatusOptions = ['Tersedia', 'Tidak Tersedia'];
                        foreach ($StatusOptions as $option) {
                            $selected = ($busData['status'] == (($option == 'Tersedia') ? '1' : '0')) ? 'selected' : '';
                            $value = ($option == 'Tersedia') ? '1' : '0';
                            echo "<option value='$value' $selected>$option</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>



                <div class="mb-3 row">
                    <div class="col-sm-2"></div>
                    <button type="submit" name="submit" value="Simpan" class="btn btn-primary col-sm-10">Simpan</button>
                </div>
            </form>
        <?php endif; ?>
    </div>
</section>




