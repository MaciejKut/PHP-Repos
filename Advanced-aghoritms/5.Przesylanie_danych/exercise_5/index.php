<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ćwiczenie 4</title>
    </head>
    <body>

        <?php
        for ($i = 1; $i <= 10; $i ++) {
            echo '<a href="multi.php?width=' . ($i + 2) . '&height=' . ($i * 3) . '">';
            echo "Link nr $i";
            echo '</a><br />';
        }
        ?>


    </body>
</html>
