<?php
// $_GET
$mahasiswa = [
["nama" => "Phiana",
    "nrp" => "012345",
    "email" => "Phiana@gmail.com",
    "jurusan" => "RPL",
    "gambar" => "jjk airport.jpg"],
["nama" => "Alviaa",
    "nrp" => "123456",
    "email" => "Alviaa@gmail.com",
    "jurusan" => "TKJ",
    "tugas" => [90,80,100],
    "gambar" => "jjk tokyo.jpg",]
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>GET</title>
</head>
<body>
   <h1>Daftar Mahasiswa</h1> 
   <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li><img src="img/<?= $mhs["gambar"]; ?>"></li>
        <li><?= $mhs["nama"];?></li>
        <li><?= $mhs ["nrp"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>