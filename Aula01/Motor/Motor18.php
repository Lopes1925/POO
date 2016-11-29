<?php

namespace POO\Aula01\Motor;

use POO\Aula01\Motor\Motor;
use MWM\Motor as MotorMWM;

/**
 * Description of Motor18
 *
 * @author Bruno
 */
class Motor18 extends MotorMWM {
    const POTENCIA = 1.8;
    
    private $nitro = false;
    
    public function ativaNitro(){
        $this->nitro = true;
    }
    /**
     * Acelera o Motor
     * @param int $valor valor da aceleração de 0 a 100
     * @return int
     */
    public function acelerar($valor = 0){
        $this->aceleracao = $valor;
        $torque = $valor * self::POTENCIA;
        if($this->nitro == true){
            return $torque * 1.5;
        }else{
            return $torque;
        }
    }
}