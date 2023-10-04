<h3>Tambah Data Mahasiswa</h3>
<form action="proses_mhs.php?aksi=tambah" method="post">
    <table>
        <tr>
            <td>NIM</td>
            <td><input type="text" name="NIM"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="Nama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="Alamat" cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan"></td>
        </tr>
    </table>
</form>