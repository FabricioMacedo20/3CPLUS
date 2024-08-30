<?php

echo 4.15;
echo "<br>";
echo 12.12;
echo "<br>";

$c = -78.1;

echo $c;
echo "<br>";

if(is_float($c)){
    echo "sim, podemos ter floats negativos!";
}

if(is_int($c)){
    echo "é um inteiro";
}