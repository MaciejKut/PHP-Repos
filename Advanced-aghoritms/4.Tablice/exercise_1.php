<?php


$array1 = [4,3,'5kd','Maciej', 'kdjf'];


for($i=0; $i< count($array1); $i++){
     echo $array1[$i];
     echo '<br />';
}

foreach ($array1 as $key => $value) {
    echo "klucz: $key ma wartość $value <br />";
}