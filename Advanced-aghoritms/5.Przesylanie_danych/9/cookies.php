<?php

$array = $_COOKIE;
echo '<ul>';
foreach ($array as $key => $value) {
    echo '<li> Nazwa ciasteczka: ' . $key . ' Wartość: ' . $value . '</li>';
}
echo '</ul>';


//print_r($_COOKIE);


