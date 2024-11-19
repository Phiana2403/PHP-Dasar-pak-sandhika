<?php
// variabel scope / lingkup variabel (global)
$x = 10;

// function tampilx(){
//     $x = 20;
//     echo $x;
// }

// tampilx();
// echo "<br>";
// echo $x;

function tampilx(){
    global $x;
    echo $x;
}

tampilx();

?>