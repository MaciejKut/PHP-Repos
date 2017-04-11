<?php

$array = $_COOKIE;
echo '<ul>';
foreach ($array as $key => $value) {
    echo '<li> Nazwa ciasteczka: ' . $key . ' Wartość: ' . $value . '</li>';
}
echo '</ul>';


//print_r($_COOKIE);


echo '<ul>';
foreach ($array as $key => $value) {
    echo '<li><a target="_blank" href="deleteCookie.php?cookie=' . $key . '">Skasuj '
    . 'zawartość ciastka o nazwie ' . $key . '</a></li>';
}
echo '</ul>';
