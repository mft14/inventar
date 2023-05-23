<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "inventardatenbank";

	// Verbindung zur Datenbank herstellen
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Überprüfen, ob Verbindung hergestellt wurde
	if (!$conn) {
		die("Verbindung fehlgeschlagen: " . mysqli_connect_error());
	}

	// Abteilung aus der AJAX-Anfrage abrufen
	$abteilung = $_POST["abteilung"];

	// Query ausführen, um Daten aus der Datenbank abzurufen
	$sql = "SELECT mitarbeiter.vorname, mitarbeiter.name, modell.bezeichnung, verantwortlichkeit.von, verantwortlichkeit.bis 
FROM (((modell 
JOIN inventar ON modell.modell_id = inventar.modell_id) 
JOIN verantwortlichkeit ON inventar.inventarnummer = verantwortlichkeit.inventarnummer) 
JOIN mitarbeiter ON verantwortlichkeit.personalnummer = mitarbeiter.personalnummer) 
JOIN abteilung ON mitarbeiter.abteilung_id = abteilung.abteilung_id 
WHERE abteilung.bezeichnung = '".$abteilung."'";
	$result = mysqli_query($conn, $sql);

	// Tabellen-HTML-Code aufbauen und als Antwort senden
	$table_html = "";
	while($row = mysqli_fetch_assoc($result)) {
		$table_html .= "<tr>";
		$table_html .= "<td>" . $row["vorname"] . "</td>";
		$table_html .= "<td>" . $row["name"] . "</td>";
		$table_html .= "<td>" . $row["bezeichnung"] . "</td>";
		$table_html .= "<td>" . $row["von"] . "</td>";
		$table_html .= "<td>" . $row["bis"] . "</td>";
		$table_html .= "</tr>";
	}
	echo $table_html;

	// Datenbankverbindung schließen
	mysqli_close($conn);
?>