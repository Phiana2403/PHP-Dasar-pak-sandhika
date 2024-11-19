<!-- <?php
// pengulangan
// for
// while
// do... while
// foreach : pengulangan khusus array

// for( $i = 0 ; $i < 5; $i++ ) {
//     echo "hello world! <br>";
// }

// $j = 0;
// while( $j < 5 ){
//     echo "hello world! <br>";
//     $j ++;
// }

// $s = 0;
// do{
//     echo "hello world! <br>";
// $s++;
// }while( $s < 5 );

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna {
            background-color: silver;
        }
    </style>
</head>
<body>
<table border="1" cellpadding= "10" cellspacing="0">
        <!-- <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
            <td>1,5</td>
        </tr>
        <tr>
            <td>2,1</td>
            <td>2,2</td>
            <td>2,3</td>
            <td>2,4</td>
            <td>2,5</td>
        </tr> -->
        <?php

            for ( $i = 1; $i <= 3; $i ++ ) : ?>

            <?php if ( $i % 2 == 0 )  :?>

                <tr class = "warna">

            <?php else : ?>

          <!-- for( $i = 1; $i <= 3; $i++ ){
                echo "<tr>";
                 for ( $j = 1; $j <= 5; $j++){
                     echo "<td>$i,$j</td>";
                }
                echo "</tr>";
             } -->

            <tr>

            <?php endif; ?>
                <?php for ( $j = 1; $j <= 5; $j++){ ?>
                        <td><?= "$i,$j" ;?></td>
                <?php } ?>
            </tr>

        <?php  endfor;?>
    </table>
</body>
</html>