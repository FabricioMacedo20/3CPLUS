<?php
 
 if(5 > 2 || 3 < 4 ) { //true e true
    echo " a operação 1 é verdadeira <br>";
 }

 if(5 > 2 || 30 < 4 ) { //true e false
    echo " a operação 2 é verdadeira <br>";
 }

 if(5 > 20 || 30 < 4 ) { //false e true
    echo " a operação 3 é verdadeira <br>";
 }

 $a = 10;
 $b = 20;
 $c = 30;
 $d = 40;

 if($a > $b || $d > $c) { //false e true
    echo " a operação 5 é verdadeira <br>";
 }

 if(($a > $b || $d > $c) && $c < $d) {  
    echo " a operação 6 é verdadeira <br>";
 }

 if(($a > $b && $d > $c) || $c < $d) {  
    echo " a operação 7 é verdadeira <br>";
 }