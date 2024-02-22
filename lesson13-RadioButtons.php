<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="radio" value="flamengo" name="time">
        Flamengo <br>
        <input type="radio" value="vasco" name="time">
        Vasco <br>
        <input type="radio" value="botafogo" name="time">
        Botafogo <br>
        <input type="submit" name="confirm" value="Vote em seu time">
    </form>
</body>
</html>
<?php
    if(isset($_POST['confirm'])){
        
        $time = null;

        if(isset($_POST['time'])){
            $time = $_POST['time'];
        }
        
        switch($time){
            case "flamengo":
                echo "É o mengão não adianta.";
                break;
            case "vasco":
                echo "É o vasco, adianta.";
                break;
            case "botafogo":
                echo "É o botafogo, adianta.";
                break;
            default:
                echo "Por favor, escolha um time.";
        }
    }
    
?>