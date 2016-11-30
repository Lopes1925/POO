<?php

namespace MWM;

use POO\Aula01\Motor\InterfaceMotor;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Motor MWM
 *
 * @author Bruno
 */
class Motor implements InterfaceMotor{
    public function acelerar($valor = 0){
        return $valor;
    }

}
