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

	// Query ausführen, um Daten aus der Datenbank abzurufen
	$sql = "SELECT mitarbeiter.personalnummer, mitarbeiter.name, mitarbeiter.vorname, abteilung.bezeichnung
FROM mitarbeiter INNER JOIN abteilung
on mitarbeiter.abteilung_id = abteilung.abteilung_id
ORDER by mitarbeiter.personalnummer asc";
	$result = mysqli_query($conn, $sql);

	// Tabellen-HTML-Code aufbauen und als Antwort senden
	$table_html = "";
	while($row = mysqli_fetch_assoc($result)) {
		$table_html .= "<tr>";
		$table_html .= "<td>" . $row["personalnummer"] . "</td>";
		$table_html .= "<td>" . $row["name"] . "</td>";
		$table_html .= "<td>" . $row["vorname"] . "</td>";
		$table_html .= "<td>" . $row["bezeichnung"] . "</td>";
		$table_html .= "</tr>";
	}
	echo $table_html;

	// Datenbankverbindung schließen
	mysqli_close($conn);
?>