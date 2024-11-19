<?php
// $_GET
$mahasiswa = [
["nama" => "Phiana",
    "nrp" => "012345",
    "email" => "Phiana@gmail.com",
    "jurusan" => "RPL",
    "gambar" => "jjk airport.jpg"],
    [
    "nama" => "Alviaa",
    "nrp" => "123456",
    "email" => "Alviaa@gmail.com",
    "jurusan" => "TKJ",
    "tugas" => "90,80,100",
    "gambar" => "jjk tokyo.jpg",
    ]
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>GET</title>

</head>
<body>
   <h1>Daftar Mahasiswa</h1> 
   <ul>
   <?php foreach ($mahasiswa as $mhs) : ?>
    <li>
        <a href="latihan2.php?
        nama=<?= $mhs["nama"]; ?>&
        nrp=<?= $mhs["nrp"]; ?>&
        email=<?= $mhs["email"]; ?>&
        jurusan=<?= $mhs["jurusan"]; ?>&
        gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]?></a>
    </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>