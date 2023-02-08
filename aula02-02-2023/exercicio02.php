<?php

require_once ("Calculadora.php");

class CalculadoraCientifica extends Calculadora {



    public function fatorial(){
        $n = $this->valor01;

        
        $contador = $n;
        $resultado = 1;
        while ($contador > 0) {
            $resultado = $resultado * $contador;

            echo '<br> contador:' . $contador . ' resultado:' . $resultado;

            $contador--;
        }
        return $resultado;
    }
}

$oCalculadora = new CalculadoraCientifica();
$oCalculadora->valor01 = 5;
$oCalculadora->valor02 = 3;

echo '<br>Numero 01:' . $oCalculadora->valor01;
echo '<br>Numero 02:' . $oCalculadora->valor02;

echo '<br>';

echo 'Soma:' . $oCalculadora->somar() . '<br>';
echo 'Subtração:' . $oCalculadora->subtrair() . '<br>';
echo 'Divisão:' . $oCalculadora->dividir() . '<br>';
echo 'Multiplicação:' . $oCalculadora->multiplicar() . '<br>';
echo '<br>Fatorial:' . $oCalculadora->fatorial() . '<br>';



















