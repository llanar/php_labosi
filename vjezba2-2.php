<?php
$rows = 0;
$columns = 0;

if (isset($_POST["rows"]) && isset($_POST["columns"])) {
    $rows = (int)$_POST["rows"];
    $columns = (int)$_POST["columns"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba 2-2</title>

    <style>
        body{
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }
        button{
            background: rgb(100, 100, 200);
            color: white;
            border-radius: 5px;
            padding: 10px;
        }
        button:hover{
            background: rgb(51, 51, 125);
        }
    </style>
</head>

<body>

<form method="POST">
    Odaberite broj stupaca tablice: <br>
    <ul>
        <input type="radio" name="columns" id="4_col" value="4"> 4 <br>
        <input type="radio" name="columns" id="6_col" value="6"> 6 <br>
        <input type="radio" name="columns" id="8_col" value="8"> 8 <br>
    </ul>
    <hr>

    Odaberite broj redova tablice: <br>
    <ul>
        <input type="radio" name="rows" id="4_row" value="4"> 4 <br>
        <input type="radio" name="rows" id="6_row" value="6"> 6 <br>
        <input type="radio" name="rows" id="8_row" value="8"> 8 <br>
    </ul>
    <hr>
    <button type="submit">Napravi tablicu</button> <br>
</form>
<br>
Ispis tablice: <br>
<table border="1" width="60%" height="500">
<?php
for ($i = 0; $i < $rows; $i++) {
    echo "<tr>";

    for ($j = 0; $j < $columns; $j++) {
        echo "<td></td>";
    }

    echo "</tr>";
}
?>
</table>

</body>
</html>