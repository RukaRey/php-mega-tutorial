<?php
    // $temp = 25;
    // $cloudy = true;

    // if($temp >= 0 && $temp <= 30){       AND STATEMENT
    //     echo "The weather is good";
    // }
    // else{
    //     echo "The weather is bad";
    // }

    // if($temp < 0 || $temp > 30){         OR STATEMENT
    //     echo "The weather is bad";
    // }
    // else{
    //     echo "The weather is good";
    // }

    // if ($cloudy){
    //     echo "It's cloudy";
    // }
    // else{
    //     echo "It's sunny";
    // }

    // $age = 25;
    // $citizen = true;

    // if ($age >= 18 && $citizen){
    //     echo "You can vote";
    // }
    // else{
    //     echo "You cannot vote";
    // }


    $child = false;
    $senior = false;
    $ticket = null;

    if ($child || $senior){
        $ticket = 10;
    }
    else{
        $ticket = 15;
    }

    echo "The ticket price is R\${$ticket}";

?>