<?php

function rentCostCalc($daysOfStay) {

    if ($daysOfStay <= 1) {
        return $daysOfStay * 200;
    } elseif ($daysOfStay > 1 && $daysOfStay <= 3) {
        return $daysOfStay * 180;
    } elseif ($daysOfStay > 3 && $daysOfStay <= 7) {
        return $daysOfStay * 160;
    } else {
        $discount = floor($daysOfStay / 7);

        return ($daysOfStay * 150) - $discount * 50;
    }
}

var_dump(rentCostCalc(8));
