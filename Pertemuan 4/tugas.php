<?php
$tugas = [
    'Hanni' => [
        "img" => "<img src='hanni.jpg'height=200 width=300>",
        "nama_lengkap" => "Pham Ngoc Han", 
        "nama_panggilan" => "Hanni", 
        "ttl" => "Melbourne, Australia, 6 Oktober 2024", 
        "pekerjaan" => "Idol Grup New Jeans"
    ],
    'Karina' => [
        "img" => "<img src='karina.jpeg'height=200 width=300>", 
        "nama_lengkap" => "Yu Ji Min", 
        "nama_panggilan" => "Karina", 
        "ttl" => "Paldal-gu, Gyeonggi-do, 11 April 2000", 
        "pekerjaan" => "Idol Grup Aespa"
    ],
];
echo "<hr>Bagas Farel Andrean<hr>";
foreach($tugas as $key => $tgs){
    echo "{$tgs['img']}<br>";
    echo "Nama: {$tgs['nama_lengkap']}<br> Nama Panggilan: {$tgs['nama_panggilan']}<br> TTL: {$tgs['ttl']}<br> Pekerjaan: {$tgs['pekerjaan']}<hr>";
}
?>
