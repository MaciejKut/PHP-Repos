<?php

$n = 5;

for ($i = $n; $i > 0; $i--) {
    for ($j = $i; $j <= $n; $j++) {
        echo '* ';
    }
    echo '<br />';
}


// here with independed loops

for ($k = $n; $k >= 0; $k--) {
    for ($l = 0; $l <= $n; $l++) {
        if ($l > $k) {
            echo '* ';
        }
    }
    echo '<br />';
}