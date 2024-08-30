<?php

$pessoa = [
    'nome' => 'fabricio',
    'idade' => 20,
    'profissao' => 'programador',
    'graduacao' => 'eng soft'
];

$maioridade = 18;

//desafio
if($pessoa['idade']>= $maioridade) {
    echo "A pessao é maior de idade!";
}