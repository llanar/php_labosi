<?php
$font_size = 12; // default

if (isset($_POST["font_size"]) && isset($_POST["confirmation"])) {
    $font_size = (int)$_POST["font_size"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba 2-1</title>

    <style>
        body {
            font-size: <?php echo $font_size; ?>px;
        }
    </style>
</head>

<body>

<form method="POST">
    Upišite željenu veličinu slova: <br>
    <input type="number" name="font_size" min="4" max="64">
    <hr>

    Potvrdite promjenu veličine: <br>
    <input type="checkbox" name="confirmation">
    Želim promijeniti veličinu
    <hr>

    <button type="submit">Promijeni</button>
</form>

</body>
</html>