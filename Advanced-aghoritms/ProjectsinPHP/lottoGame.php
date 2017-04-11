<?php
 
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['start']) && is_numeric($_GET['start']) && isset($_GET['stop']) && is_numeric($_GET['stop'])) {
        //var_dump($_GET);
        $start = $_GET['start'];
        $stop = $_GET['stop'];
    }
} else {
    $start = 1;
    $stop = 49;
}
?>
<html>
    <head>
        <style>
            h1{
                display: inline-block;

            }
            body {
                /* Background pattern from Subtle Patterns */
                background-image: url('img/symphony.png');
                text-align: center;
            }
        </style>
    </head>
    <div id="container" style="width: 1000px; margin-left: auto; margin-right:auto;">

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['choosed']) && (count($_POST['choosed'])) === 6) {
                $picked = $_POST['choosed'];
                sort($picked);
                echo 'Wybrałeś: ';
                foreach ($picked as $value) {
                    echo $value . ', ';
                }
            } else {
                echo '<em style="font-size: 18px;">Nie prawidłowe dane zaznacz dokładnie 6 liczb</em>';
            }
            // losowanie liczb
            echo '<br /> Wylosowane liczby to: ';

            $range = range($start, $stop);
            shuffle($range);

            $wylosowane = array_slice($range, 0, 6);
            sort($wylosowane);
            foreach ($wylosowane as $value) {
                echo $value . ', ';
            }

            if (isset($picked)) {
                $matching = array_intersect($picked, $wylosowane);
                if (count($matching) >= 0) {
                    switch (count($matching)) {
                        case 0:
                            echo '<br/>Słabo nic nie wygrałeś<br/>';
                            break;
                        case 1:
                        case 2:

                            echo '<br/>Nieźle graj dalej!<br/>';
                            foreach ($matching as $value) {
                                echo '<h1>' . $value . ',</h1> ';
                            }
                            break;
                        case 3:
                            echo '<br/>Wygrywasz 50zł<br/>';
                            foreach ($matching as $value) {
                                echo '<h1>' . $value . ',</h1> ';
                            }
                            break;
                        case 4:
                            echo '<br/>Wygrywasz 5000zł<br/>';
                            foreach ($matching as $value) {
                                echo '<h1>' . $value . ',</h1> ';
                            }
                            break;
                        case 5:
                            echo '<br/>Wygrywasz 50000zł<br/>';
                            foreach ($matching as $value) {
                                echo '<h1>' . $value . ',</h1> ';
                            }
                            break;
                        case 6:
                            echo '<br/>Wygrywasz 7 000 000 zł<br/>';
                            foreach ($matching as $value) {
                                echo '<h1>' . $value . ',</h1> ';
                            }
                            break;

                        default:
                            break;
                    }
                }
            }
        }



        echo '<div style="margin-left: auto; margin-right:auto; width: 400px;">'
        . 'Proszę wylosować 6 liczb.<form method="POST" action="#">';
        echo '<fieldset>';
        for ($i = $start; $i <= $stop; $i++) {

            echo '<label>' . $i . '<input type="checkbox" name="choosed[]" value="' . $i . '"/></label>';
        }
        echo '<input type="submit" style="display: block; margin-top: 20px"/></fieldset>';
        echo '<form></div>';
        ?>

        <div></div>
    </div>
</html>
