<?php

for ($i = 1; $i < 11; $i++) {
    echo '<a href="ex1.php?start=' . $i . '&stop=' . ($i + 5) . '">';
    echo "link nr $i";
    echo '</a><br />';
}

