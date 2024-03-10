<?php

$kursi = 45;
$ditempati = 28;
$kosong = $kursi - $ditempati;
$persentase = round(($kosong / $kursi) * 100, 2);

echo "Jumlah kursi di restoran: $kursi <br>";
echo "Jumlah kursi yang ditempati: $ditempati <br>";
echo "Jumlah kursi yang kosong: $kosong <br>";
echo "Persentase kursi yang kosong: $persentase% <br>";
?>
