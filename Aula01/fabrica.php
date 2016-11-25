<pre>
<?php

//include "Carro.php"; //include continua a execução mesmo com erro ou não encontrando o arquivo.
//require "Carro.php"; //require para a execução ao encontrar um erro ou não encontrando o arquivo.
require_once "Carro.php";
require_once './Motor.php';

$motor = new Motor();

$veiculo1 = new Carro($motor, "Preto");
$veiculo2 = clone $veiculo1;

$veiculo2->cor = "Vermelho";
$veiculo2->abastecer(15);

$veiculo1->acelerar(40);

var_dump($veiculo1);