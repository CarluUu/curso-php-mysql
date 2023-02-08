<?php

class Calculadora {

    public $valor01;
    public $valor02;

    public function somar(){
        return $this->valor01 + $this->valor02;
    }

    public function subtrair(){
        return $this->valor01 - $this->valor02;
    }

    public function dividir(){
        return $this->valor01 / $this->valor02;
    }

    public function multiplicar(){
        return $this->valor01 * $this->valor02;
    }
}

$oCalculadora = new Calculadora();
$oCalculadora->valor01 = 10;
$oCalculadora->valor02 = 20;

echo '<br>Numero 01:' . $oCalculadora->valor01;
echo '<br>Numero 02:' . $oCalculadora->valor02;

echo '<br>';

echo 'Soma:' . $oCalculadora->somar() . '<br>';
echo 'Subtração:' . $oCalculadora->subtrair() . '<br>';
echo 'Divisão:' . $oCalculadora->dividir() . '<br>';
echo 'Multiplicação:' . $oCalculadora->multiplicar() . '<br>';
