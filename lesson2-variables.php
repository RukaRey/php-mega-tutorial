<?php
    $nome = "Lucca Rei";
    $comida = "Pão";
    $email = "luciano17701@gmail.com";

    $idade = 17;
    $usuarios = 2;
    $qte = 3;

    $gpa = 2.5;
    $preco = 5.99;
    $impostos = 5.1;

    $empregado = false;
    $online = true;
    $for_sale = false;

    $total = null;

    echo "Hello {$nome}<br>" ;
    echo "You like {$comida}<br>";
    echo "Your email is {$email}<br>";

    echo "You are {$idade} years old<br>";
    echo "There are {$usuarios} users online<br>";
    echo "You would like to buy {$qte} items<br>";

    echo "Your GPA is: {$gpa}<br>";
    echo "Your {$comida} is R\${$preco}<br>";
    echo "The sales tax rates is: {$impostos}<br>";

    echo "Online status: {$online}<br><br>";

    echo "You have ordered {$qte}x {$comida}s<br>";
    $total = $qte * $preco;
    echo "Your total is: R\${$total}";
?>