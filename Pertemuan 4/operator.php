<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilkurang = $a - $b;
$hasilkali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil penjumlahan: $hasilTambah <br>";
echo "Hasil pengurangan: $hasilkurang <br>";
echo "Hasil perkalian: $hasilkali <br>";
echo "Hasil pembagian: $hasilBagi <br>";
echo "Hasil sisa bagi: $sisaBagi <br>";
echo "Hasil pangkat: $pangkat <br> <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Apakah a sama dengan b: " . ($hasilSama ? "Ya" : "Tidak") . "<br>";
echo "Apakah a tidak sama dengan b: " . ($hasilTidakSama ? "Ya" : "Tidak") . "<br>";
echo "Apakah a lebih kecil dari b: " . ($hasilLebihKecil ? "Ya" : "Tidak") . "<br>";
echo "Apakah a lebih besar dari b: " . ($hasilLebihBesar ? "Ya" : "Tidak") . "<br>";
echo "Apakah a lebih kecil atau sama dengan b: " . ($hasilLebihKecilSama ? "Ya" : "Tidak") . "<br>";
echo "Apakah a lebih besar atau sama dengan b: " . ($hasilLebihBesarSama ? "Ya" : "Tidak") . "<br> <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Apakah A And B bernilai true: " . ($hasilAnd ? "Ya" : "Tidak") . "<br>";
echo "Apakah A Or B bernilai true: " . ($hasilOr ? "Ya" : "Tidak") . "<br>";
echo "Apakah Not A bernilai true: " . ($hasilNotA ? "Ya" : "Tidak") . "<br>";
echo "Apakah Not B bernilai true: " . ($hasilNotB ? "Ya" : "Tidak") . "<br> <br>";

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "Hasil nilai a setelah ditambah nilai b: $a <br>";  
echo "Hasil nilai a setelah dikurangi nilai b: $a <br>"; 
echo "Hasil nilai a setelah dikali nilai b: $a <br>"; 
echo "Hasil nila a setelah dibagi nilai b: $a <br>"; 
echo "Hasil nilai a setelah modulus b: $a <br> <br>"; 

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Apakah a identik dengan b: " . ($hasilIdentik ? "Ya" : "Tidak") . "<br>"; 
echo "Apakah a tidak identik dengan b: " . ($hasilTidakIdentik ? "Ya" : "Tidak") . "<br>";
?>


