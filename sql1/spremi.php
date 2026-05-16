<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "fakultet";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Konekcija nije uspjela: " . mysqli_connect_error());
}

$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$jmbag = $_POST['jmbag'];
$prisutnost = $_POST['prisutnost'];

$sql = "INSERT INTO Evidencija
(ime_studenta, prezime_studenta, JMBAG, prisutnost)
VALUES
('$ime', '$prezime', '$jmbag', '$prisutnost')";

if (mysqli_query($conn, $sql)) {
    echo "Podaci uspješno spremljeni.";
} else {
    echo "Greška: " . mysqli_error($conn);
}

mysqli_close($conn);

?>