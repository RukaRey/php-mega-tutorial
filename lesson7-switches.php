<?php
    $grade = 'Fa';

    switch($grade){
        case 'A':
            echo "Nota Máxima";
            break;
        case 'B':
            echo "Nota Boa";
            break;
        case 'C':
            echo "Nota Aceitável";
            break;
        case 'D':
            echo "Nota ruim";
            break;
        case 'F':
            echo "Falhou matéria";
            break;
        default:
            echo "Nota não válida: {$grade}";
    }
    echo "<br><br>";
    $date = date("l");
    
    
    switch($date){
        case "Tuesday":
            echo "Hoje é segunda";
            break;
        case "Monday":
            echo "Hoje é terça";
            break;
        case "Wednesday":
            echo "Hoje é quarta";
            break;
        case "Thursday":
            echo "Hoje é quinta";
            break;
        case "Friday":
            echo "Hoje é sexta";
            break;
        case "Saturday":
            echo "Hoje é sábado";
            break;
        case "Sunday":
            echo "Hoje é domingo";
            break;
        default:
            echo "{$date} não é um dia";
    }
?>