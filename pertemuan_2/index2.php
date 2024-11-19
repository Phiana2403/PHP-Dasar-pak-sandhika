<?php

// penulisan sintaks php
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

?>

<!-- 2. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>welcome to, <?php echo "Phiana website"; ?></h1>
    <p><?php echo "ini adalah paragraf"; ?></p>
    <!-- 1. -->
    <?php
        echo "<h1>welcome to, Phiana website</h1>"
    ?>
</body>
</html>