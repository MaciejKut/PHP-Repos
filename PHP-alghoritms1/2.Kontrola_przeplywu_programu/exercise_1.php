<?php

$month = 9;


switch ($month) {
    case 1:
        echo 'Styczeń';
        break;
    case 2:
        echo 'Luty';
        break;
    case 3:
        echo 'Marzec';
        break;
    case 4:
        echo 'Kwiecień';
        break;
    case 5:
        echo 'Maj';
        break;
    case 6:
        echo 'Czerwiec';
        break;
    case 7:
        echo 'Lipiec';
        break;
    case 8:
        echo 'Sierpień';
        break;
    case 9:
        echo 'Wrzesień';
        break;
    case 10:
        echo 'Październik';
        break;
    case 11:
        echo 'Listopad';
        break;
    case 12:
        echo 'Grudzień';
        break;
    default:
        echo 'Wrong data. Must be Integer 1 - 12.';
        break;
}