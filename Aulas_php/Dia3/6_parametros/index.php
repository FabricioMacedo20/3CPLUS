<?php
  
  function velocidadeMaxima($vel) {

        if(is_int($vel)) {
            echo "o carro antinge a velocidade maxima de $vel km/h <br>";
        } else {
            echo "por favor, passe um numero inteiro <br>";
        }
  }

  

  velocidadeMaxima(200);
  velocidadeMaxima(300);
  velocidadeMaxima(400);

  //não pode
  //velocidadeMaxima();
  
  echo "teste continuando <br>";

  $velocidade = 125;

  velocidadeMaxima($velocidade);

  //php ignora parametro desnecessario
  velocidadeMaxima(250, "teste");

  function descreveAnimal($nome, $raca) {

    echo "O $nome é da $raca";

  }

  descreveAnimal("bob", "vira lata",);
  descreveAnimal("shark", "partor alemão",);
  descreveAnimal("poodle", "tita",);