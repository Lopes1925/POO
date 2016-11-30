<?php

namespace POO\Aula01\Motor;

use POO\Aula01\Motor\Motor;


/**
 * Description of Motor18
 *
 * @author Bruno
 */
class Motor18 extends Motor implements \JsonSerializable, \Countable{
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
        if($this->estaLigado() == false){
            throw new\Exception("Não foi possível acelerar porque o motor não esta ligado.");
        }
        $this->aceleracao = $valor;
        $torque = $valor * self::POTENCIA;
        if($this->nitro == true){
            return $torque * 1.5;
        }else{
            return $torque;
        }
    }
    public function jsonSerialize() {
        return array("Potencia" => self::POTENCIA);
    }
    public function count() {
        return $this->aceleracao;
    }

}