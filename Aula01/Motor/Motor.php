<?php

namespace POO\Aula01\Motor;

use POO\Aula01\Motor\InterfaceMotor;

/**
 * Classe generica de motor
 * 
 * @author Bruno
 * @link https://github.com/Lopes1925/POO
 */
abstract class Motor implements InterfaceMotor{
    const POTENCIA = 1.0;
    
    private $tipoCombustivel = "Flex";
    protected $aceleracao = 0;
    private $ligado = false;


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
    
    /**
     * Liga o Motor, setando o atributo ligado como true
     */
    public function ligar(){
        $this->ligado = true;
    }
    
    /**
     * Desliga o Motor, setando o atributo ligado como false
     */
    public function desliga(){
        $this->ligado = false;
    }
    
    /**
     * Informa se o motor esta ligado ou desligado
     * @return bool
     */
    public function estaLigado(){
        return $this->ligado;
    }
}