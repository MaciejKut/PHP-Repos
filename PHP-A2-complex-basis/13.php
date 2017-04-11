<?php

$n = 5;

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        if ($i >= $j) {
            echo '*&nbsp;&nbsp;&nbsp;';
        } else {
            echo "&nbsp;$j&nbsp;&nbsp;";
        }
    }
    echo '<br />';
}


for ($i = $n; $i >= 1 ; $i--) {
    for ($j = 1; $j <= $n; $j++) {
        if ($i >= $j) {
            echo '*&nbsp;&nbsp;&nbsp;';
        } else {
            echo "&nbsp;$j&nbsp;&nbsp;";
        }
    }
    echo '<br />';
}
            