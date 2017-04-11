<?php

function actCurrRate($cur) {
    $x = file_get_contents("http://api.nbp.pl/api/exchangerates/rates/A/" . $cur . "/?format=json");
    $cur_decoded = json_decode($x, true);
    return $cur_decoded['rates']['0']['mid'];
}

function changeMoney($str, $amount) {

    $a = substr($str, 0, 3);
    if ($a == 'PLN') {
        $a2 = 1;
    } else {
        $a2 = actCurrRate($a);
    }

    $b = substr($str, 5);
    if ($b == 'PLN') {
        $b2 = 1;
    } else {
        $b2 = actCurrRate($b);
    }
    $result = round(($a2 / $b2 * $amount), 2);
    echo "Changing $amount $a to => $b = $result";
    return TRUE;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ćwiczenie 5</title>
    </head>
    <body>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (isset($_POST['conversionType']) && isset($_POST['cashAmount']) &&
                    is_numeric($_POST['cashAmount'])) {
                $str = $_POST['conversionType'];
                $val = $_POST['cashAmount'];

                changeMoney($str, $val);
            } else {
                echo 'Podano nieprawidłowe dane należy wpisać kwotę, użyto'
                . 'nie dozwolonych znaków';
            }
        }
        ?>

        <form action="#" method="POST">
            <label>
                Kwota:
                <input type="number" min="0.00" step="0.01" name="cashAmount">
            </label>
            <label>
                Konwersja:
                <input type="radio" name="conversionType" value="EURtoUSD" checked> EUR → USD <br>
                <input type="radio" name="conversionType" value="USDtoEUR" > USD → EUR <br>
                <input type="radio" name="conversionType" value="EURtoPLN" > EUR → PLN <br>
                <input type="radio" name="conversionType" value="PLNtoEUR" > PLN → EUR <br>
                <input type="radio" name="conversionType" value="USDtoPLN" > USD → PLN <br>
                <input type="radio" name="conversionType" value="PLNtoUSD" > PLN → USD <br>
            </label>
            <input type="submit">
        </form>

    </body>
</html>

