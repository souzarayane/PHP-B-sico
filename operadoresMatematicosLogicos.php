<?php
    $numero1 = 10;
    $numero2 = '11';

    /* Operadores Matemáticos
    if($numero1 < $numero2){

    }else{

    }

    if($numero1 <= $numero2){
        echo 'execute';
    }

    if($numero1 > $numero2){

    }else{

    }

    if($numero1 >= $numero2){
        echo 'execute';
    }
    */

    /*Operadores Lógicos
    && -> e
    || -> ou
    */
    $var1 = 'valor1';
    $var2 = 'valor1';
    $var3 = 'valor1';

    if(($var1 == $var2)&&($var2 == $var3)){
        echo 'Condição e verdadeira';
    }

    echo '<br />';

    if($var1 == $var2 || $var1 == $var3){
        echo 'Condição ou verdadeira';
    }
?>