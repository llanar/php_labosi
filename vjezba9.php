<?php
    date_default_timezone_set('Europe/Zagreb');
    $dateTime = new DateTimeImmutable();

    $date = $dateTime->format('d.m.Y');
    $time = $dateTime->format('H:i');

    echo "$date $time";

    $hour = (int)$dateTime->format('H');
    $day = $dateTime->format('D');
?>

<?php
    function ducan($stanje){
        echo "Ducan je $stanje.";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba 9</title>
</head>
<body>

    <?php
        $workdays = array("Mon", "Tue", "Wed", "Thu", "Fri");
        $holidays = [
            "01.01.2026",
            "06.01.2026",
            "06.04.2026",
            "01.05.2026",
            "30.05.2026",
            "11.06.2026",
            "22.06.2026",
            "05.08.2026",
            "15.08.2026",
            "01.11.2026",
            "18.11.2026",
            "25.12.2026",
            "26.12.2026"
    ];

        if(in_array($date, $holidays)) {
            ducan("zatvoren");
        } else if(
                (in_array($day, $workdays) && $hour >= 8 && $hour < 20)
                || ($day == "Sat" && $hour >= 9 && $hour < 14)) {
                    ducan("otvoren");
        }else{
            ducan("zatvoren");
        }
    ?>

</body>
</html>