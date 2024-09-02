<?php

    class pessoa {

        function falar() {
         echo "ola pessoal!";
        }
    }

    $fabricio = new Pessoa();

    $fabricio->nome = "fabricio";

    echo $fabricio->nome;

    echo "<br>";

    $fabricio->falar();
