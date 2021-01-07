<?php
    /*
    Operadores
    = atribuição
    == igualdade
    === idênticos, mesmo valor e tipo
    != diferente
    */

    $n1 = 10;
    $n2 = 30;
    $n3 = 40;
    $n4 = '40';
    $n5 = 50;
    $n6 = 50;

    $n1 = $n2;
    echo $n2;

    echo '<br />';

    if($n3 == $n4){
        echo 'São iguais';
    }
    
    echo '<br />';

    if($n5 === $n6){
        echo'São idênticos';
    }

    echo '<br />';

    if($n1 != $n6){
        echo'São diferentes';
    }

?>