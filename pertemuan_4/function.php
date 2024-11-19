<?php
// jika di function sudah diisi waktu dan namanya, dan di h1 tidak diberi informasi maka akan
// ditampilkan di function tadi.
// namun jika di h1 diisi, maka yang di function akan ditimpa yang h1

function salam ($waktu, $nama){
    return "Selamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Siang","Phiana"); ?></h1>
</body>
</html>