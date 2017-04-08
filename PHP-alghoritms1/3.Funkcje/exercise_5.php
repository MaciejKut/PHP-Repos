<?php

function rockPS($player1, $player2) {

    if (($player1 === 'papier' || $player1 === 'nożyce' || $player1 === 'kamień') &&
            ($player2 === 'papier' || $player2 === 'nożyce' || $player2 === 'kamień')) {

        if ($player1 === 'papier' && $player2 === 'nożyce') {
            echo 'Wygrywa Gracz 2';
        } elseif ($player1 === 'papier' && $player2 === 'kamień') {
            echo 'Wygrywa Gracz 1';
        } elseif ($player1 === 'papier' && $player2 === 'papier') {
            echo 'Remis';
        } elseif ($player1 === 'nożyce' && $player2 === 'nożyce') {
            echo 'Remis';
        } elseif ($player1 === 'nożyce' && $player2 === 'papier') {
            echo 'Wygrywa player 1';
        } elseif ($player1 === 'nożyce' && $player2 === 'kamień') {
            echo 'Wygrywa player 2';
        } elseif ($player1 === 'kamień' && $player2 === 'kamień') {
            echo 'Remis';
        } elseif ($player1 === 'kamień' && $player2 === 'nożyce') {
            echo 'Wygrywa player 1';
        } elseif ($player1 === 'kamień' && $player2 === 'papier') {
            echo 'Wygrywa player 2';
        }
    } else {
        echo 'Nieprawidłowe wartości: można wpisać papier, kamień lub nożyce';
    }
}

rockPS('kamień', 'nożyce');
