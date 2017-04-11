<?php

$godzina = 15;


switch ($godzina) {
    case 8:
    case 9:
    case 10:
    case 11:
        echo 'Wykłady';
        break;
    case 12:
    case 13:
        echo 'Dyskusje';
        break;
    case 14:
        echo 'Obiad';
        break;
    case 15:
    case 16:
    case 17:
    case 18:
        echo 'Prelekcje';
        break;
    case 19:
        echo 'Kolacja';
        break;

    default:
        break;
}