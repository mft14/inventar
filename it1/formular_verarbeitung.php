<?php
// Datenbankverbindung herstellen
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventardatenbank";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Überprüfen, ob die Verbindung hergestellt wurde
if (!$conn) {
    die("Verbindung fehlgeschlagen: " . mysqli_connect_error());
}

// Daten aus dem Formular abrufen
$inventarnummer = $_POST["inventarnummer"];
$personalnummer = $_POST["personalnummer"];
$auswahlVon = $_POST["datum1"];
$auswahlBis = $_POST["datum2"];

// SQL-Abfrage zum Einfügen der Daten in die Tabelle
$sql = "INSERT INTO verantwortlichkeit (inventarnummer, personalnummer, von, bis) 
VALUES (
    (SELECT inventarnummer FROM inventar WHERE inventarnummer = '".$inventarnummer."'),
    (SELECT personalnummer FROM mitarbeiter WHERE personalnummer = '".$personalnummer."'),
    '".$auswahlVon."',
    '".$auswahlBis."'
)";

// Überprüfen, ob die Daten erfolgreich eingefügt wurden
if (mysqli_query($conn, $sql)) {
    echo "Daten erfolgreich eingefügt";
	echo $auswahlBis;
	echo $auswahlVon;
	echo $personalnummer;
	echo $inventarnummer;
	echo "Test";
} else {
    echo "Fehler: " . $sql . "<br>" . mysqli_error($conn);
}

// Datenbankverbindung schließen
mysqli_close($conn);
?>
