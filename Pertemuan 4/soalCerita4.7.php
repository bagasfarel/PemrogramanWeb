<?php
$hargaProduk = 120000;
echo "Harga Produk: $hargaProduk<br>";
if ($hargaProduk > 100000) {
    $diskon = $hargaProduk * 0.20;
    echo "Diskon: $diskon<br>";
    $hargaSetelahDiskon = $hargaProduk - $diskon;
    echo "Harga yang harus dibayar setelah diskon: Rp $hargaSetelahDiskon";
} else {
    echo "Pelanggan tidak mendapatkan diskon <br>";
    echo "Harga yang harus dibayar: Rp $hargaProduk";
}
?>