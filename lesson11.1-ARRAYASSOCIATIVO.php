<?php
    /*
    Array Associativo: Um array feito de chaves e valores. 
    */

    $capitals = array("USA"=>"Washington D.C",
                      "Japan"=>"Kyoto",
                      "South Korea"=>"Seoul",
                      "India"=>"New Delhi");

    // $capitals["USA"] = "Los Santos";             MUDA O VALOR DE UMA CHAVE
    // $capitals["China"] = "Beijing";              ADICIONA UM NOVO PAR CHAVE/VALOR
    // array_pop($capitals);                        REMOVE ÚLTIMO
    // array_shift($capitals);                      REMOVE PRIMEIRO
    // $keys = array_keys($capitals);               CRIA ARRAY COM APENAS CHAVES
    // $values = array_values($capitals);           CRIA ARRAY COM APENAS VALORES

    // $flip = array_flip($capitals);               INVERTE CHAVES E VALORES
    // $reverse = array_reverse($capitals);         INVERTE ORDEM DO ARRAY
    // echo count($capitals) . "<br>";              DEVOLVE A QUANTIDADE DE ITEMS NO ARRAY

    foreach($capitals as $key => $value){
        echo $key . " - " . $value . "<br>";
    }
?>