<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>

    <style>

        .buttons {
            margin-top: 20px;
        }

        .buttons button {
            width: 50px;
            height: 40px;
            border: none;
            border-radius: 5px;
            background-color: #e0e0e0;
            font-size: 18px;
        }

        .buttons button:hover {
            background-color: #d0d0d0;
        }

    </style>
</head>
<body>

    <p>Kalkulator (Switch naredba)<p>

    <form method="get">
        <label>Upiši prvi broj *</label>
        <input type="number" name="a" required>

        <br>

        <label>Upiši drugi broj *</label>
        <input type="number" name="b" required>

        <br>
         Rezultat:


        <div class="buttons">
            <button type="submit" name="op" value="+">+</button>
            <button type="submit" name="op" value="-">-</button>
            <button type="submit" name="op" value="*">*</button>
            <button type="submit" name="op" value="/">/</button>
        </div>
    </form>

    <?php
    if (isset($_GET["a"]) && isset($_GET["b"]) && isset($_GET["op"])) {

        $a = $_GET["a"];
        $b = $_GET["b"];
        $op = $_GET["op"];
        $rezultat = "";

        switch ($op) {
            case "+":
                $rezultat = $a + $b;
                break;
            case "-":
                $rezultat = $a - $b;
                break;
            case "*":
                $rezultat = $a * $b;
                break;
            case "/":
                if ($b == 0) {
                    echo("Greška!");
                    return;
                }
                $rezultat = $a / $b;
                break;
        }

        echo "<div class='result success'>Rezultat: $rezultat</div>";
    }
    ?>
</div>

</body>
</html>