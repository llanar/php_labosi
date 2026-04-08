<?php
    $broj = isset($_GET['broj']);
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
        <label>Broj:</label>
        <input type="number" name="broj" required><br><br>

        <input type="submit" value="Pošalji">
    </form>
    <br>

    <?php
        if (isset($_GET["broj"])) {
            $broj = $_GET["broj"];
        if($broj % 2){
            echo("Broj $broj je neparan.");
        }else{
            echo("Broj $broj je paran.");
        }
    }
    ?>
    
</body>
</html>