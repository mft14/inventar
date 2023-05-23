<!DOCTYPE html>
<?php
    session_start();
    // Check if the user is logged in
    if (!isset($_COOKIE['loggedin']) || $_COOKIE['loggedin'] != 'true' || $_SESSION['role'] != 'abt') {
      header("Location: ../login.php"); // Redirect the user to the login page
      exit();
    }
?>
<html>
<head>
	<title>Asset-Management</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="leitung.css">
    <link rel="stylesheet" href="../src/main.css" type="text/css">
    <link rel="shortcut icon" href="../src/inventarlogo.svg">
</head>
<body>
    <?php include '../infoleiste.php'; ?>
	<h1>Alle Mitarbeiter</h1>
	<label for="abteilung">Abteilung:</label>
	<select id="abteilung">
		<option value="IT">IT</option>
		<option value="Schadenregulierung">Schadenregulierung</option>
		<option value="Finanzen">Finanzen</option>
		<option value="Personal">Personal</option>
		<option value="Recht">Recht</option>
		<option value="Aktuariat">Aktuariat</option>
		<option value="Kundenservice">Kundenservice</option>
	</select>

	<table id="mitarbeiter-tabelle">
		<thead>
			<tr>
				<th>Vorname</th>
				<th>Nachname</th>
				<th>Bezeichnung</th>
				<th>Von</th>
				<th>Bis</th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>

<script src="leitung.js"></script> <!-- Verweis auf die JavaScript-Datei -->
</body>
</html>
