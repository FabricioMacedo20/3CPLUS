<?php

$carro = [
    'marca'=> 'MBW',
    'rodas' => 4,
    'teto_solar' => true,
    'velocidade_max' => 300,
    'blindado' => false
];

print_r($carro);

$marca = $carro ['marca'];
$velocidade_maxima = $carro ['velocidade_max'];

echo "<br>";

echo "o carro é da marca $marca e atinge no maximo $velocidade_maxima km/h";
