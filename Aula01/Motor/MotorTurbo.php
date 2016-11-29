<?php

namespace POO\Aula01\Motor;

use POO\Aula01\Motor\Motor;

/**
 * Description of MotorTurbo
 *
 * @author Bruno
 */
class MotorTurbo extends Motor {
    private $turbo = false;
    
    public function ativaTurbo(){
        $this->turbo = true;
    }
    
}
