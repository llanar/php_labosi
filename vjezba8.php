<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba 8</title>
    <style>
        body{
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }
        button {
            background-color: #2aa7a1; 
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 14px;
        }
        button:hover {
            background-color: #238d88; 
        }
    </style>
</head>

<body>

<form method="GET">
    <p>Lista vozila:</p>

    <?php
        $cars = array("Audi", "BMW", "Renault", "Citroen");
    ?>

    <?php
        foreach ($cars as $car) {
            echo "<input type='radio' name='choice' value='$car'> $car<br>";
        }
    ?>
    <br>
    <button type="submit">Pošalji</button>
</form>

<?php
    if (isset($_GET['choice'])) {
        $selected = $_GET['choice'];
        echo "<p>Odabrali ste: <strong>$selected</strong></p>";
    }
?>

</body>
</html>