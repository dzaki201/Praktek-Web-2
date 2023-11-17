<h3>Tambah Data Pasien</h3>
<form action="proses_pasien.php?aksi=tambah" method="post">
    <table>
        <tr>
            <td>NO RM</td>
            <td><input type="text" name="no_rm"></td>
        </tr>
        <tr>
            <td>Nama Pasien</td>
            <td><input type="text" name="nama_pasien"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="date" name="tanggal_lahir"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan"></td>
        </tr>
    </table>
</form>