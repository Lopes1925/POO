<?php

//include "Carro.php"; //include continua a execução mesmo com erro ou não encontrando o arquivo.
//require "Carro.php"; //require para a execução ao encontrar um erro ou não encontrando o arquivo.
require_once "Carro.php";

$veiculo1 = new Carro("Preto");
$veiculo2 = new Carro();

//$veiculo->cor = "Vermelho";
//$veiculo->motor = 1.8; //motor é um atributo privado não permite alteração.

$veiculo2->abastecer(15);

var_dump($veiculo1, $veiculo2);

echo $veiculo1::MODELO."\n";
echo $veiculo1::MARCA."\n";

/*
if($veiculo1 == $veiculo2){
	echo "sim\n";
}else{
	echo "não\n";
}
*/

//smb://10.0.254.200/alunos em 10.0.254.200/semana_noite/9617-PHP2/Bruno
