<?php
    $user_input = isset($_GET['user_input']);
    $bot_input = random_int(0, 2);
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
        <select name="user_input">
            <option value="0">🪨</option>
            <option value="1">✂️</option>
            <option value="2">📃</option>
        </select>
        <input type="submit" value="Pošalji">
    </form>

    <?php
    if (isset($_GET["user_input"])) {
        $user_input = $_GET["user_input"];
        if($user_input == 0){echo("Odabrali ste kamen.\n");}
        elseif($user_input == 1){echo("Odabrali ste škare.\n");}
        else{echo("Odabrali ste papir.\n");}
    }
    
    if($user_input < $bot_input || $user_input == 2 && $bot_input == 0){
        echo("Pobijedili ste!\n");
    }
    elseif($user_input == $bot_input){echo("Izjednačeno je!\n");}
    else{
        echo("Izgubili ste!\n");
    }
    if($bot_input == 0){echo("Bot je odabrao kamen.");}
    elseif($bot_input == 1){echo("Bot je odabrao škare.");}
    else{echo("Bot je odabrao papir.");}
    ?>


</body>
</html>