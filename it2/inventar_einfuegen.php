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
$datum = $_POST["datum"];
$preis = $_POST["preis"];
$seriennummer = $_POST["seriennummer"];
$anmerkung = $_POST["anmerkung"];
$modell = $_POST["modell"];
$raumbezeichnung = $_POST["raumbezeichnung"];

// SQL-Abfrage zum Einfügen der Daten in die Tabelle
$sql = "INSERT INTO inventar (beschaffungsdatum, preis, seriennummer, anmerkung, modell_id, raumnummer)
VALUES (
		'".$datum."', 
		'".$preis."', 
		'".$seriennummer."', 
		'".$anmerkung."',
	   (SELECT modell_id FROM modell WHERE bezeichnung = '".$modell."'),  
	   (SELECT raumnummer FROM raum WHERE raumname = '".$raumbezeichnung."')
)";

// Überprüfen, ob die Daten erfolgreich eingefügt wurden
if (mysqli_query($conn, $sql)) {
    echo "Daten erfolgreich eingefügt";
	echo $datum;
	echo $preis;
	echo $seriennummer;
	echo $anmerkung;
	echo $modell;
	echo $raumbezeichnung;
} else {
    echo "Fehler: " . $sql . "<br>" . mysqli_error($conn);
}

// Datenbankverbindung schließen
mysqli_close($conn);
?>
