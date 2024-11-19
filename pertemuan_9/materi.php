<?php
// ambil data dari tabel mahasiswa / query data mahasiswa
// fungsi $.. untuk memudahkan dan memberi pesan kesalahan
$result = mysqli_query($conn, "SELECT * FROM  mahasiswa");
// fungsi mysqli_query adalah untuk menunjukkan (lemari) dan bukan isinya (baju yang ingin dilihat)

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() : mengembalikan array numerik
// mysqli_fetch_assoc() : mengembalikan array associative
// mysqli_fetch_array() : mengembalikan keduanya
// mysqli_fetch_object() : 

// $mhs = mysqli_fetch_row($result);
// var_dump ($mhs[3]);

// while ($mhs = mysqli_fetch_assoc($result)){
//     var_dump($mhs);
// }

// $mhs = mysqli_fetch_array($result);
// var_dump($mhs["jurusan"]);
// $mhs = mysqli_fetch_object($result);
// var_dump($mhs -> email);

// var_dump($result);
// if( !$result ){
//     echo mysqli_error($conn)
// }
?>