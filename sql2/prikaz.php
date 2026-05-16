<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "fakultet";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM korisnik";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Prikaz korisnika</title>

    <style>

        table {
            border-collapse: collapse;
            width: 80%;
        }

        td, th {
            border: 1px solid black;
            padding: 10px;
        }

    </style>

</head>
<body>

<table>

    <tr>
        <th>id</th>
        <th>ime</th>
        <th>Prezime</th>
        <th>spol</th>
        <th>telefon</th>
        <th>email</th>
        <th>godine</th>
        <th>hobi</th>
    </tr>

<?php

while($row = mysqli_fetch_assoc($result)) {

    if($row['godine'] < 33) {
        $boja = "blue";
    } else {
        $boja = "red";
    }

    echo "<tr style='background-color:$boja'>";

    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['ime'] . "</td>";
    echo "<td>" . $row['Prezime'] . "</td>";
    echo "<td>" . $row['spol'] . "</td>";
    echo "<td>" . $row['telefon'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['godine'] . "</td>";
    echo "<td>" . $row['hobi'] . "</td>";

    echo "</tr>";
}

mysqli_close($conn);

?>

</table>

</body>
</html>