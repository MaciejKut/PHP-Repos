<?php

// tabliczka mnożenia

$n = 9;
echo '<table style="border: 1px dashed black;">';
for ($i = 1; $i <= $n; $i++) {
    echo '<tr style="border: 1px dashed black;">';
    for ($j = 1; $j <= $n; $j++) {
        echo '<td style="border: 1px dashed black;">';
        echo "$i * $j =" . $i * $j;
        echo '</td>';
    }
    echo '<tr/>';
}
echo '<table>';

