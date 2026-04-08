<?php

    $a = isset($_GET['a']);
    $b = isset($_GET['b']);
    $n = random_int(1, 10);
    $m = random_int(1, 9);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="get">
            <label>Upiši jedan broj id 1 do 10: </label>
            <input type="number" name="a" required>
            <input type="submit" value="Pošalji">
        </form>

         <?php
        if (isset($_GET["a"])) {
            $a = $_GET["a"];
        }


        if($a == $n){
            echo('<div style="color:white; background-color:green; padding:10px; display:inline-block;">
            Pogodak, probaj ponovo!
          </div>'); 
        }else{
            echo('<div style="color:white; background-color:red; padding:10px; display:inline-block;">
            Krivo, probaj ponovo!
          </div>');
        }
        ?>

        <break>
        <p>Zamišljeni broj je <?php echo($n) ?></p>

        <form method="get">
            <label>Upiši jedan broj id 1 do 9: </label>
            <input type="number" name="b" required>
            <input type="submit" value="Pošalji">
        </form>

         <?php
        if (isset($_GET["b"])) {
            $b = $_GET["b"];
        }

        if($b == $m){
            echo('<div style="color:white; background-color:green; padding:10px; display:inline-block;">
            Pogodak, probaj ponovo!
          </div>');
        }else{
            echo('<div style="color:white; background-color:red; padding:10px; display:inline-block;">
            Krivo, probaj ponovo!
          </div>');
        }
        ?>

         <break>
        <p>Zamišljeni broj je <?php echo($m) ?></p>

</body>
</html>