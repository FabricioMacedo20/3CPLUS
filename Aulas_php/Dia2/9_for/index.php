<?php

$j = 0;
$nome = "fabricio";

 //contador; condição; incremento/decremento
 for($i = 0; $i < 10; $i++) {

    if($i == 4) {
        echo "$nome <br>";
    }

    if($i == 8) {
        break;
    }

    echo "testando for $i <br>";

 }