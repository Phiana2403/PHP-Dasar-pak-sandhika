<?php
// $mahasiswa = [
//     ["Phiana", "012345", "Phiana@gmail.com",
// "RPL"],
//     ["Alviaa", "123456", "Alviaa@gmail.com",
// "TKJ"],
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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

// echo $mahasiswa[1]["tugas"][2];

// ini untuk satu mahasiswa
// echo $mahasiswa["jurusan"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <!-- <li>Phiana</li>
        <li>012345</li>
        <li>Phiana@gmail.com</li>
        <li>RPL</li> -->
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>