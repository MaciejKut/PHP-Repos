<?php

$n = 5;

for($i=0; $i < $n; $i++){
    for($j=0; $j<$n; $j++){
        if(($i+$j)%2 == 0){
            echo '&nbsp;&nbsp;&nbsp;&nbsp;';
        }else{
            echo '&nbsp;&nbsp;*&nbsp;&nbsp;';
        }
    }
    echo '<br />';
}