<?php

namespace POO\Aula01\Veiculos;

use POO\Aula01\Motor\Motor;
use POO\Aula01\Motor\InterfaceMotor;

class Carro{
	const MODELO = "A3"; //CONST 
	const MARCA = "AUDI";

	public $cor;
        
        /**
         * @var Motor 
         */
	private $motor;
	private $porta = 4;
	
	private $tanqueCombustivel = 0;

	/**
         * 
         * @param Motor $motor
         * @param string $cor
         */
        public function __construct(InterfaceMotor $motor, $cor = "Branco"){
		$this->tanqueCombustivel = 10;
		$this->cor = $cor;
                $this->motor = $motor;
	}

	/**
         * Liga ou Desliga o motor
         */
        public function ligaDesliga(){
            if($this->motor->estaLigado()){
                $this->motor->desliga();
            }else{
                $this->motor->ligar();
            }
        }

        /**
         * Faz o carro andar
         * @param type $torque
         */
        private function andar($torque){
            echo "Andou ".$torque." Metros\n";
	}
        
        /**
         * Envia aceleração ao motor
         * @param int $valor Valor da aceleração informada
         */
        public function acelerar($valor){
            try{
                echo "Antes de acelerar \n";
                $torque = $this->motor->acelerar($valor);
                $this->andar($torque);
                echo "Depois de acelerar \n";
            }  catch (\Exception $e){
                echo $e->getMessage();
            }
            echo "Fim da função \n";
        }

        /**
         * Abastece o veículo
         * @param int $valor Valor a ser colocado no tanque
         */
        public function abastecer($valor){
		$this->tanqueCombustivel += $valor;
	}
        /**
         * Sobrecarga - Overloading de atributo
         * @param type $name
         * @param type $arguments
         */
        public function __call($name, $arguments) {
            echo "Você não adquiriu o opcional: ".$name;
        }
        /**
         * Sobrecarga - Overloading de atributo
         * @param type $name
         */
        public function __get($name) {
            echo "Você tentou ler o atributo: $name \n";
        }
        /**
         * Sobrecarga - Overloading de atributo
         * @param type $name
         * @param type $value
         */
        public function __set($name, $value) {
            $this->$name = $value;
            echo "Você tentou escrever no atributo: $name o valor $value \n";
        }
}
