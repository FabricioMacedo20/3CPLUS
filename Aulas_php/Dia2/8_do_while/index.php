<?php
 
  $j = 0;

  $teste = "fabricio";

  do {

    echo "testando do while $j <br>";

    if($j == 2) {
        echo "$teste <br>";
    }

    $j++; 
  } while($j < 10);

  $i = 10;

  do {

    echo "testando do while 2 $i <br>";

    if($j == 2) {
        echo "$teste <br>";
    }

    $i--;

  } while($i > 0);