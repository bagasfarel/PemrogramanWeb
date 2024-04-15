<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["nama_peserta"] = $_POST["nama_peserta"];
    $_SESSION["tempat_lahir"] = $_POST["tempat_lahir"];
    setcookie("utusan_unit", htmlspecialchars($_POST["utusan_unit"]));
    $_SESSION["kelurahan_desa"] = $_POST["kelurahan_desa"];
    $_SESSION["kecamatan"] = $_POST["kecamatan"];
    $_SESSION["no_telp"] = $_POST["no_telp"];
    setcookie("jenis_lomba", implode(",",$_POST["jenis_lomba"]));
} else {
    echo "<p>Data formulir tidak ditemukan.</p>";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Formulir</title>
    <link rel="stylesheet" type="text/css" href="hasilForm.css">
</head>

<body>
    <div class="container">
        <h1>Hasil Formulir Pendaftaran Lomba</h1>
        <div class="hasil">
            <table cellpadding=3px>
            <tr>
                <td>Nama Peserta </td>
                <td>: <?php echo $_SESSION["nama_peserta"]; ?><br></td>
            </tr>
           <tr>
            <tr>
                <td>Tempat Tanggal Lahir </td>
                <td>: <?php echo $_SESSION["tempat_lahir"]; ?><br></td>
            </tr>
            <tr>
                <td>Utusan Unit</td>
                <td>: <?php echo $_COOKIE["utusan_unit"]; ?><br></td>
            </tr>
            <tr>
                <td>Kelurahan Desa</td>
                <td>: <?php echo $_SESSION["kelurahan_desa"]; ?><br></td>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <td>: <?php echo $_SESSION["kecamatan"]; ?><br></td>
            </tr>
            <tr>
                <td>No Telp</td>
                <td>: <?php echo $_SESSION["no_telp"]; ?><br></td>
            </tr>
            <tr>
                <td>Jenis Lomba</td>
                <td>: <?php echo $_COOKIE["jenis_lomba"]; ?><br></td>
            </tr>
                </table>
        </div>
        <div class="button-container">
            <button onclick="window.location.href = 'form.php';">Kembali</button>
        </div>

</html>