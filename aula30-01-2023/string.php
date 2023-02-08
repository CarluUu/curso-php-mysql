<?php

if(isset($_GET["palavra"])){
    $palavra = $_GET["palavra"];

    function testesString($palavra){
        echo 'Palavra:' . $palavra;
        //echo '<br>Iniciando com strings';
        echo '<br>';
        $tamanho = strlen($palavra);
        echo 'Tamanho:' . $tamanho;
        echo '<br>Percorrendo as letras da palavra';
        $aNovaPalavra = array();
        for($i = 0; $i < $tamanho; $i++) {
            $letra = $palavra[$i];
            echo '<br>Letra: ' . $letra . ' - posição:' . $i;

            $aNovaPalavra[] = $letra;
        }

        echo '<br>Nova Palavra:<br>';
        // Pega o tamanho do array
        $tamanho = count($aNovaPalavra);
        for($i = 0; $i < $tamanho; $i++) {
            $letra = $aNovaPalavra[$i];
            echo '<br>Letra Nova: ' . $letra . ' - posição:' . $i;
        }

        // Faça um algoritmo para verificar se uma palavra é
        // palindroma.
        // Palavra palindroma, da o mesmo nome de traz para
        // frente
    }

    function mostraPalavra($palavra){
        if(is_array($palavra)){
            $tamanho = count($palavra);
        } else if(is_string($palavra)){
            $tamanho = strlen($palavra);
        } else {
            throw new Exception("Palavra invalida!");
        }

        for($i = 0; $i < $tamanho; $i++) {
            $letra = $palavra[$i];
            echo '<br>Letra: ' . $letra . ' - posição:' . $i;
        }
    }