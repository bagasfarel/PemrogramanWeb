<?php

$nilai = array(85, 92, 78, 64, 90, 75, 88, 79, 70, 96);
sort($nilai);
$nilai = array_slice($nilai, 2, -2);
$total = array_sum($nilai);
$rata = $total / count($nilai);

echo "Total nilai yang akan digunakan untuk menentukan nilai rata-rata adalah $total\n"; 
echo "<br>";
echo "Nilai rata-rata dari nilai-nilai yang tersisa adalah $rata";
?>
