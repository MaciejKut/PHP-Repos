<?php
session_start();

if (isset($_COOKIE['oceny'])) {
    $oceny = unserialize($_COOKIE['oceny']);
}

if (!isset($_SESSION['grades'])) {
    $_SESSION['grades'] = [];
} else {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['grade']) && $_POST['grade'] >= 2 && $_POST['grade'] <= 5) {

            $oceny[] = $_POST['grade'];
            setcookie('oceny', serialize($_SESSION['grades']), time() + 3600);
        } else {
            echo 'Niprawidłowa wartość, ocena musi być <2, 5>';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ćwiczenie 6</title>
    </head>
    <body>

        <form action="#" method="POST">
            <label>
                Ocena:
                <input type="number" step="1" name="grade">
            </label>
            <input type="submit">
        </form>
        <span style="display: block; margin-bottom: 20px;"></span>

        <?php
        if ($oceny) {
            $sum = 0;
            echo '<table style="border: 1px solid black;">';
            echo '<tr><td>nr</td><td>ocena</td></tr>';
            foreach ($oceny as $key => $value) {
                echo '<tr style="border: 1px solid black;">';
                echo '<td style="border: 1px solid black;">';
                echo $key + 1;
                echo '</td>';
                echo '<td style="border: 1px solid black;">' . $value . '</td>';
                echo '</tr>';
                $sum += $value;
            }
            $avrg = ($sum / (count($oceny)));
            echo '<tr style="border: 1px solid black;"><td>Suma to:</td><td>' . $sum . '</td></tr>';
            echo '<tr><td>średnia to:</td><td>' . $avrg . '</td></tr>';
            echo '</table>';
        }
        ?>



    </body>
</html>






