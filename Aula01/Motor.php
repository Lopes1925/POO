<?php
/**
 * Classe gnerica de motor
 * 
 * @author Bruno
 * @link https://github.com/Lopes1925/POO
 */
class Motor {
    private $potencia = 1.0;
    private $tipoCombustivel = "Flex";
    private $aceleracao = 0;
    
    /**
     * Acelera o motor
     * @param int $valor valor da aceleração de 0 a 100
     * @return int
     */
    public function acelerar($valor = 0){
        $this->aceleracao = $valor;
        $potencia = $valor * $this->potencia;
        return $potencia;
    }
}
