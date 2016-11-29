<?php

namespace POO\Aula01\Motor;

use POO\Aula01\Motor\Motor;

/**
 * Classe generica de motor
 * 
 * @author Bruno
 * @link https://github.com/Lopes1925/POO
 */
abstract class Motor {
    const POTENCIA = 1.0;
    
    private $tipoCombustivel = "Flex";
    protected $aceleracao = 0;
    
    /**
     * Acelera o motor
     * @param int $valor valor da aceleração de 0 a 100
     * @return int
     */
    public function acelerar($valor = 0){
        $this->aceleracao = $valor;
        $potencia = $valor * self::POTENCIA;
        return $potencia;
    }
}