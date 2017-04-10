<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['width']) && isset($_GET['height'])) {
        $width = $_GET['width'];
        $height = $_GET['height'];
    } else {
        $width = 5;
        $height = 10;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ćwiczenie 4</title>
    </head>
    <body>

        <?php
        echo '<table style="border: 1px dashed black;">';
        for ($i = 1; $i <= $height; $i++) {
            echo '<tr style="border: 1px dashed black;">';
            for ($j = 1; $j <= $width; $j++) {
                echo '<td style="border: 1px dashed black;">';
                echo "$i * $j =" . $i * $j;
                echo '</td>';
            }
            echo '<tr/>';
        }
        echo '<table>';
        ?>


    </body>
</html>
