<?php

namespace POO\Aula01\Motor;

use POO\Aula01\Motor\Motor;

/**
 * Description of MotorTurbo
 *
 * @author Bruno
 */
final class MotorTurbo extends Motor implements \JsonSerializable{
    private $turbo = false;
    
    public function ativaTurbo(){
        $this->turbo = true;
    }
    public function acelerar($valor = 0) {
        return parent::acelerar($valor);
    }
    public function jsonSerialize() {
        
    }

}
