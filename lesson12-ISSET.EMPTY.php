<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>username: </label>
        <input type="text" name="username"><br>

        <label>password: </label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log In">
    </form>
</body>
</html>
<?php
//ISSET()
//     $username = "LuccaRei";

//     if(isset($username)){
//         echo "The variable is set.";
//     }
//     else{
//         echo "The variable is not set.";
//     }

//     echo "<br>";

//EMPTY()
//     if(empty($username)){
//         echo "The variable is empty.";
//     }
//     else{
//         echo "The variable is not empty.";
//     }


    if (isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
            echo "USERNAME IS MISSING";
        }
        else{
            echo "Welcome {$username}.<br>";
        }
        if(empty($password)){
            echo "PASSWORD IS MISSING";
        }
    }

    foreach($_POST as $key=>$value){
        echo "{$key} = {$value} <br>";
    }
?>