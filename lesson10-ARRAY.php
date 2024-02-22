<?php
    $foods = array("apple","orange","banana","coconut");


    // echo $foods[0];
    // echo $foods[1];
    // echo $foods[2];
    // echo $foods[3];

    $foods[0] = "pineapple";

    array_push($foods,"apple","kiwi");       //PUSH TO END
    array_pop($foods);                       //REMOVE ÚLTIMO ITEM DO ARRAY
    array_shift($foods);                     //REMOVE PRIMEIRO ITEM DO ARRAY

    $reversed_foods = array_reverse($foods); //REVERTE O ARRAY, CRIANDO UM NOVO/SOBREESCREVENDO
    echo count($foods) . "<br>";


    foreach($foods as $food){
        echo $food . "<br>";
    }

    echo "<br>";

    foreach($reversed_foods as $food){
        echo $food . "<br>";
    }

?>