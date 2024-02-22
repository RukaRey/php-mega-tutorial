<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">username:</label><br>
        <input type="text" name="username"><br>

        <label for="">password:</label><br>
        <input type="password" name="password"><br>

        <input type="submit" value="Log in">
    </form>
    
</body>
</html>
<?php
    // $_GET, $_POST:
    // Variáveis especiais, coletam dados de  
    // forms HTML. São enviados através de <form>
    // <form action="file.php" method="get">
    
    // $_GET NÃO TEM PRIVACIDADE, E POSSUI UM LIMITE DE CHARS
    // Requerições GET são armazenadas em cache
    // Ótimo para barras de pesquisa

    // $_POST DATA É ARMAZENADA NO CORPO DO HTML, SEGURO
    // Não possui limite de caracteres
    // Requerições não vão para o cache
    // Ótimo pra enviar dados pessoais

    echo $_POST["username"] . "<br>";
    echo $_POST["password"] . "<br>";
?>