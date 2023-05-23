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

// SQL-Abfrage zum Einfügen der Daten in die Tabelle
$sql = "DELETE FROM verantwortlichkeit 
		WHERE verantwortlichkeit.inventarnummer = '".$inventarnummer."'";

// Überprüfen, ob die Daten erfolgreich eingefügt wurden
if (mysqli_query($conn, $sql)) {
    echo "Verantwortlichkeit erfolgreich entfernt";
} else {
    echo "Fehler: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "DELETE FROM inventar 
		WHERE inventar.inventarnummer = '".$inventarnummer."'";

if (mysqli_query($conn, $sql)) {
    echo "Daten erfolgreich entfernt";
} else {
    echo "Fehler: " . $sql . "<br>" . mysqli_error($conn);
}


// Datenbankverbindung schließen
mysqli_close($conn);
?>
