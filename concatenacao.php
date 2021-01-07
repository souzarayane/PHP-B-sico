<?php
    $nome = 'Maria';
    $idade = 65;
    $frase = 'Meu nome é ';
    $nomedaclasse = 'box';

    define('NOME', 'Maria');
    //echo $frase.$nome.$idade;
    //echo "Meu nome é $nome";
    echo "<div class=\"$nomedaclasse\">Meu conteúdo da div</div> ";
?>