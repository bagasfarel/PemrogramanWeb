<?php
$daftarNilai = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];
echo "Daftar nama siswa beserta nilai: <br>";
foreach($daftarNilai as $x){
    echo "{$x[0]}: {$x[1]}<br>";
}

$totalNilai = 0;
foreach ($daftarNilai as $nilai) {
    $totalNilai += $nilai[1];
}

$nilaiMean = $totalNilai / count($daftarNilai);

foreach ($daftarNilai as $siswa) {
    if ($siswa[1] > $nilaiMean) {
        $siswaPintar[] = $siswa[0];
    }
}
echo "Nilai rata-rata Kelas: $nilaiMean<br>";

echo "Siswa yang mendapatkan nilai di atas rata-rata adalah: <br>" . implode(", ", $siswaPintar);
?>