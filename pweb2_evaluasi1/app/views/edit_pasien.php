<?php
include'../classes/database.php';
$db=new database();
?>

<h3>Edit Data Mahasiswa</h3>
<form action="proses_pasien.php?aksi=update" method="post">
    <?php
    foreach($db->edit_pasien($_GET['id']) as $d){
    ?>
    <table>
        <tr>
            <td>NO RM</td>
            <td>
            <input type="hidden" name="id" value="<?php echo $d['id'] ?>">    
            <input type="text" name="no_rm" value="<?php echo $d['no_rm'] ?>" disabled></td>    
        </tr>
        <tr>
            <td>Nama Pasien</td>
            <td><input type="text" name="nama_pasien" value="<?php echo $d['nama_pasien'] ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" cols="30" rows="5"><?php echo $d['alamat'] ?></textarea></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="date" name="tanggal_lahir" value="<?php echo $d['tanggal_lahir'] ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan"></td>
        </tr>
    </table>
    <?php
    }
    ?>
</form>