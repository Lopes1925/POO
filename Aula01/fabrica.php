//<pre>
<?php

//include "Carro.php"; //include continua a execução mesmo com erro ou não encontrando o arquivo.
//require "Carro.php"; //require para a execução ao encontrar um erro ou não encontrando o arquivo.
require_once './autoload.php';
/*
require_once './Motor/InterfaceMotor.php';
require_once './Veiculos/Carro.php';
require_once './Motor/Motor.php';
require_once './Motor/Motor18.php';
require_once './Motor/MotorTurbo.php';
require_once './MWM/Motor.php';
 */

use POO\Aula01\Veiculos\Carro;
use POO\Aula01\Motor\Motor18;
use POO\Aula01\Motor\MotorTurbo;

//$motor = new Motor();
$motor18 = new Motor18();
$motorTurbo = new MotorTurbo();
$motorMWM = new MWM\Motor();

$veiculo1 = new Carro($motor18, "Preto");
$veiculo2 = clone $veiculo1;



$veiculo2->cor = "Vermelho";
$veiculo2->abastecer(15);

$veiculo1->ligaDesliga();
$veiculo1->acelerar(40);
//$veiculo1->estacionar();
echo "\n";

//$veiculo1->tanqueCombustivel(120);
echo "\n";


//var_dump($veiculo1);

//echo "Potencia do motor: ".Motor::POTENCIA;

//var_dump($motor18);

//echo count($motor18);

//echo json_encode($motor18);