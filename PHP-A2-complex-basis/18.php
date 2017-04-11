<?php

function theGreatestNumber($a, $b, $c){
    
   if($a >= $b){
       if($a >= $c){
           return $a;
       } else {
           return $c;
       }
   }elseif($b >= $c){
       return $b;
   } else {
       return $c;
   }
}
    

var_dump(theGreatestNumber(4, 4, 5));