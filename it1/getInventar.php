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
	//$abteilung = $_POST["abteilung"];

	// Query ausführen, um Daten aus der Datenbank abzurufen
	$sql = "SELECT inventar.inventarnummer, modell.bezeichnung, modell.beschreibung
FROM inventar INNER JOIN modell
ON modell.modell_id = inventar.modell_id
order by inventar.inventarnummer ASC";
	$result = mysqli_query($conn, $sql);

	// Tabellen-HTML-Code aufbauen und als Antwort senden
	$table_html = "";
	while($row = mysqli_fetch_assoc($result)) {
		$table_html .= "<tr>";
		$table_html .= "<td>" . $row["inventarnummer"] . "</td>";
		$table_html .= "<td>" . $row["bezeichnung"] . "</td>";
		$table_html .= "<td>" . $row["beschreibung"] . "</td>";
		$table_html .= "</tr>";
	}
	echo $table_html;

	// Datenbankverbindung schließen
	mysqli_close($conn);
?>