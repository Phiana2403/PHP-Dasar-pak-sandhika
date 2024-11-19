<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    
    <!-- pentingnya tag dalam "" pada method sama dengan di latihan4.php -->
    <!-- pada action harus diisi jika tidak maka data akan ditampilkan pada
     halaman ini sendiri -->
    <form action="latihan4.php" method="post">
        Masukkan nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" naame="submit">Kirim!</button>
    </form>

</body>
</html>