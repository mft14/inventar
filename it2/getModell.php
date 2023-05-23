<?php
// Datenbankverbindung herstellen
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventardatenbank";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Überprüfen, ob die Verbindung funktioniert hat
if (!$conn) {
    die("Verbindung fehlgeschlagen: " . mysqli_connect_error());
}

// SQL-Abfrage ausführen
$sql = "SELECT modell.bezeichnung FROM modell ORDER BY modell.bezeichnung ASC";
$result = mysqli_query($conn, $sql);

// Array für die Dropdown-Optionen initialisieren
$options = array();

// Über das Ergebnis-Objekt iterieren und Optionen zum Array hinzufügen
while ($row = mysqli_fetch_assoc($result)) {
    $options[] = $row['bezeichnung'];
}

// Verbindung schließen
mysqli_close($conn);

// Antwort als JSON formatieren und zurückgeben
echo json_encode($options);
?>
