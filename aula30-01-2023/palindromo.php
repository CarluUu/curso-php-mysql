<?php
// Carregando css
echo '<link rel="stylesheet" href="styles.css">';

echo 'Verificando palindromo<br><br><br><br>';

if(isset($_GET["palavra"])){
    $palavra = $_GET["palavra"];
    
    function isPalindrome($palavra = false){
        $str = "Civic";
        if($palavra){
            $str = $palavra;
        } else {
            $palavra = $str;
        }

        $palavra = strtolower($palavra);
        
        echo 'formando nova palavra...';
        
        $tamanho = strlen($str);
        $tamanho_nova_palavra = $tamanho - 1;
        $nova_palavra = "";
        for($i = 0; $i < $tamanho; $i++) {
            $letra = $palavra[$i];
            
            echo '<br>letra:' . $letra . ' - posição:' . $i . '<br>';
    
            $letra_nova = $palavra[$tamanho_nova_palavra];
            
            // coloca as letras em minusculo
            $letra_nova = strtolower($letra_nova);
    
            // Remove 1 do iterador de controle da nova palavra
            $tamanho_nova_palavra = $tamanho_nova_palavra - 1;
            
            echo '<br>Formando nova palavra...LETRA:' . $letra_nova ;
            
            $nova_palavra .= $letra_nova;
        }
        
        echo '<br><br><br>nova palavra:.' . $nova_palavra;
        
        echo '<br><br><br>';
        if($palavra == $nova_palavra) {
            echo "palindromo!";
        } else {
            echo "Nao e palindromo!";
        }
    }
    
    isPalindrome($palavra);
    
} else {
    echo '<span class="parametro-invalido">Parametros invalidos!</span>';
}