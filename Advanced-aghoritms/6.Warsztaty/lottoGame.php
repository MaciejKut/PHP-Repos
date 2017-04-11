<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['choosed']) && (count($_POST['choosed'])) === 6) {
        var_dump($_POST);
    } else {
        echo 'Nie prawidłowe dane zaznaczy dokładnie 6 liczb';
        var_dump($_POST);
    }
    // losowanie liczb
    echo '<br /> Wylosowane liczby to: ';
    echo print_r($wylosowane);
}

$start = 1;
$stop = 49;

echo '<div style="margin-left: auto; margin-right:auto; width: 400px;"><form method="POST" action="#">';
echo '<fieldset>';
for ($i = $start; $i <= $stop; $i++) {

    echo '<label>' . $i . '<input type="checkbox" name="choosed[]" value="' . $i . '"/></label>';
}
echo '<input type="submit" style="display: block; margin-top: 20px"/></fieldset>';
echo '<form></div>';



echo '<div></div>';
