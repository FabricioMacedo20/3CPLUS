<?php

 echo 5 / 2;
 echo "<br>";

 if(is_float(5/2)) {
    echo "é float <br>";
 }

 echo 2 . 3; 
 echo "<br>";

  if(is_string(5/2)) {
    echo "é float <br>";
  }

  $nome= "fabricio";
  $sobrenome = "macedo";

  $nomeCompleto = $nome . " " . $sobrenome;

  echo $nomeCompleto;
  echo "<br>"; 