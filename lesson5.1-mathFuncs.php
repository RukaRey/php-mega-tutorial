<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>x</label>
        <input type="text" name="x">
        <br>
        <label>y</label>
        <input type="text" name="y">
        <br>
        <label>z</label>
        <input type="text" name="z">

        <input type="submit" value="total">
    </form>
</body>
</html>
<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    // $total = abs($x);        ABSOLUTE VALUE
    // $total = round($x);      ARREDONDAR
    // $total = floor($x);      ARREDONDAR SEMPRE PRA BAIXO
    // $total = ceil($x);       ARREDONDAR SEMPRE PRA CIMA

    // $total = sqrt($x);       RAIZ QUADRADA
    // $total = pow($x, $y);    POTENCIA DO PRIMEIRO PELO SEGUNDO
    // $total = max($x,$y,$z);  MAIOR NUMERO ENTRE OS TRÊS
    // $total = min($x,$y,$z);  MENOR NUMERO ENTRE OS TRÊS

    // $total = pi();           OS NUMEROS DE PI

    // $total = rand();         GERA UM NUMERO ALEATÓRIO *SEM LIMITES
    // $total = rand(1, 6);     GERA UM NUMERO ALEATÓRIO ENTRE O PRIMEIRO E O SEGUNDO NUMERO

    echo $total;
?>