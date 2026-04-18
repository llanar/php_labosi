<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba 10</title>
    <style>
        #highlighted{
            color: red;
        }
    </style>
</head>
<body>
    <form method = "GET">
        Ulazni tekst: <br>
        <textarea name="text" id="text"></textarea>
        <br>
        <button type="submit">Submit</button>
        <br>
    </form>

    <?php
    if (isset($_GET['text'])) {
        $inputText = $_GET['text'];
    }
    
    $c = str_word_count($inputText);
    echo "Ulazni niz " . "<span id='highlighted'>$inputText</span>" . " ima $c rijeci.";
    ?>


</body>
</html>