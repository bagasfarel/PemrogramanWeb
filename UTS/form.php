<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="formStyle.css">
    <script src="jquery-3.7.1.js"></script>
    <title>Formulir Pendaftaran</title>
</head>

<body>
    <div class="main-container form-container">
        <hr color="black">
        <div id="formulir">
            <h2>
                <center>FORMULIR PENDAFTARAN PEKAN<br>OLARHRAGA TKA/TPA</center><br>
            </h2>
            <form action="hasilForm.php" method="POST">
                <table align="center">
                    <tr>
                        <td><label for="nama_peserta">Nama Peserta:</label></td>
                        <td><input type="text" name="nama_peserta" id="nama_peserta" required></td>
                    </tr>
                    <tr>
                        <td><label for="tempat_lahir">Tempat/Tanggal Lahir:</label></td>
                        <td><input type="text" name="tempat_lahir" id="tempat_lahir" required></td>
                    </tr>
                    <tr>
                        <td><label for="utusan_unit">Utusan Unit:</label></td>
                        <td><input type="text" name="utusan_unit" id="utusan_unit" required></td>
                    </tr>
                    <tr>
                        <td><label for="kelurahan_desa">Kelurahan/Desa:</label></td>
                        <td><input type="text" name="kelurahan_desa" id="kelurahan_desa" required></td>
                    </tr>
                    <tr>
                        <td><label for="kecamatan">Kecamatan:</label></td>
                        <td><input type="text" name="kecamatan" id="kecamatan" required></td>
                    </tr>
                    <tr>
                        <td><label for="no_telp">No telp:</label></td>
                        <td><input type="text" name="no_telp" id="no_telp" required></td>
                    </tr>
                    <tr>
                        <td align="left"><label>Jenis Lomba:</label></td>
                        <td>
                            <input type="checkbox" name="jenis_lomba[]" id="tarik_tambang" value="tarik_tambang">
                            <label for="tarik_tambang">Tarik Tambang (4 Pemegang + 1 Laki - 5 Orang)</label><br>
                            <input type="checkbox" name="jenis_lomba[]" id="lari_stapet" value="lari_stapet">
                            <label for="lari_stapet">Lari Stapet (3 Perempuan)</label><br>
                            <input type="checkbox" name="jenis_lomba[]" id="gobak_sodor" value="gobak_sodor">
                            <label for="gobak_sodor">Gobak Sodor (3 Perempuan)</label><br>
                            <input type="checkbox" name="jenis_lomba[]" id="tansi" value="tansi">
                            <label for="tansi">Tansi (1 orang perwakilan TAK/TPIA)</label><br>
                            <input type="checkbox" name="jenis_lomba[]" id="cermati" value="cermati">
                            <label for="cermati">Ceramah (1 orang perwakilan TAK/TPIA)</label><br>
                        </td>
                    </tr>
                </table>
                <br>
                <table align="center" style="width: 80%;">
                    <tr>
                        <td style="width: 0%; text-align: center;">
                            <label>Kepala Unit TNA/TPA</label><br>
                            <img src="ttd.jpeg" class="img" style="width: 100px;"><br>
                            (Tanda Tangan Kepala Unit)
                        </td>
                        <td style="width: 0%; text-align: center;">
                            <label>Peserta Lomba</label><br>
                            <img src="ttd.jpeg" class="img" style="width: 100px;"><br>
                            (Tanda Tangan Peserta Lomba)
                        </td>
                    </tr>
                </table>
                </table><br>
                <center><input type="submit" value="DAFTAR"></center>
                <hr color="black">
            </form>
        </div>
    </div>
    <script src="form.js"></script>
</body>

</html>