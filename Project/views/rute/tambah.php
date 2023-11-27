<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SIPEBUS</title>
</head>
<div class="px-5 py-4 ">
    <h3 class="text-center mb-5">Tambah Data Rute</h3>
    <form action="prosesrute" method="post">
        <!-- <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">ID Bus</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="id">
        </div>
    </div> -->
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Nama Rute</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_rute" placeholder="Tujuan Awal-Tujuan Akhir">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Jarak (KM)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="jarak">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="harga">
            </div>
        </div>
        <div class="mb-3 row ">
            <div class="col-sm-2"></div>
            <button type="submit" name="submit" value="Simpan" class="btn btn-primary col-sm-10">Simpan</button>
        </div>

    </form>
</div>