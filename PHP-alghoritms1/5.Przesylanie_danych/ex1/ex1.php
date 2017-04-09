<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['start']) && isset($_GET['stop'])) {
        $start = $_GET['start'];
        $stop = $_GET['stop'];

        for ($i = $start; $i <= $stop; $i++) {
            echo "$i <br />";
        }
    } else {
        echo 'Metodą GET nic nie przesłano';
    }
}

