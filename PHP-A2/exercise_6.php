<?php

//0 - 39 pkt - ocena niedostateczna
//* 40 - 54 pkt - ocena dopuszczająca
//* 55 - 69 pkt - ocena dostateczna
//* 70 - 84 pkt - ocena dobra
//* 85 - 98 pkt - ocena bardzo dobra
//* 99 - 100 pkt - ocena celująca


$points = 42;

if ($points >= 0 && $points <= 39) {
    echo 'ocena niedostateczna';
} elseif ($points > 39 && $points <= 54) {
    echo 'ocena dopuszczająca';
} elseif ($points > 54 && $points <= 69) {
    echo 'ocena dostateczna';
} elseif ($points > 69 && $points <= 84) {
    echo 'ocena dobra';
} elseif ($points > 84 && $points <= 98) {
    echo 'ocena bardzo dobra';
} elseif ($points > 98 && $points < 100) {
    echo 'ocena celująca';
} else {
    echo 'Nieprawidłowa ilość punktów' . $points;
}
