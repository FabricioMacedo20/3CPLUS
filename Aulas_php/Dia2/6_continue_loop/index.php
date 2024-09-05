<?php

 $a = 10;

 while ($a > 0) {

    if($a == 5 || $a == 7);{


    echo "pulou a execução $a <br>";

    $a--;

    continue;

    }

    if($a == 2) {

    echo "executando o loop $a <br>";

    break;

    }

    $a--;

 }