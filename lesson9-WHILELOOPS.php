<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="submit" name="stop" value="stop">
</body>
</html>
<?php
    //WHILE LOOP

    // $counter = 0;

    // while($counter < 10){
    //     $counter++;
    //     echo $counter . "<br>";
    // }

    if(isset($_POST['stop'])){
        $running = false;
    }

    $seconds = 0;
    $running = true;

    // while($running){
    //     $seconds++;
    //     echo $seconds . "<br>";
    // }

?>