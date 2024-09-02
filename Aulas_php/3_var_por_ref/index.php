<?php
  
  $X = 10;

  $y =& $X;

  echo $X;
  echo "<br>";
  echo $y;
  echo "<br>";
  
  $y = 15;

  echo "atribuição após ref";
  echo "<br>";
  echo $X;
  echo "<br>";
  echo $y;
  echo "<br>";

  $X = 20;

  echo "atribuição após ref 2";
  echo "<br>";
  echo $X;
  echo "<br>";
  echo $y;
  echo "<br>";

  $nome = "fabricio";

  $nome2 =& $nome;
  echo "<br>";
  echo $nome;
  echo "<br>";
  echo $nome2;
  echo "<br>";
  
