<?php
include'../classes/database.php';
$db=new database();
?>

<h3>Edit Data Mahasiswa</h3>
<form action="proses_mhs.php?aksi=update" method="post">
    <?php
    foreach($db->edit($_GET['id']) as $d){
    ?>
    <table>
        <tr>
            <td>NIM</td>
            <td>
            <input type="hidden" name="id" value="<?php echo $d['id'] ?>">    
            <input type="text" name="NIM" value="<?php echo $d['NIM'] ?>"></td>    
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="Nama" value="<?php echo $d['Nama'] ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="Alamat" cols="30" rows="5"><?php echo $d['Alamat'] ?></textarea></td>
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