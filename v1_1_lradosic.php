<?php

    $ime = isset($_GET['ime']);
    $prezime = isset($_GET['prezime']);
    $godina = isset($_GET['godina']);
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
        <label>Ime:</label>
        <input type="string" name="ime" required><br><br>

        <label>Prezime:</label>
        <input type="string" name="prezime" required><br><br>

        <label>Godina rođenja: </label>
        <input type="string" name="godina" required><br><br>

        <input type="submit" value="Pošalji">
    </form>

    <?php
        if (isset($_GET["ime"]) && isset($_GET["prezime"]) && isset($_GET["godina"])) {
            $ime = $_GET["ime"];
            $prezime = $_GET["prezime"];
            $godina = $_GET["godina"];

            echo($ime[0] . '.' . $prezime . '/' . substr($godina, 2, 3));

    }
    ?>
    
</body>
</html>