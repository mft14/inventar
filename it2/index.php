<!DOCTYPE html>
<?php
    session_start();
    // Check if the user is logged in
    if (!isset($_COOKIE['loggedin']) || $_COOKIE['loggedin'] != 'true' || $_SESSION['role'] != 'it2') {
      header("Location: ../login.php"); // Redirect the user to the login page
      exit();
    }
?>
<html>
<head>
	<title>Asset-Management</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="einkauf.css"> <!-- Verweis auf die CSS-Datei -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="einkauf.js"></script> <!-- Verweis auf die JavaScript-Datei -->
    <link rel="stylesheet" href="../src/main.css" type="text/css">
    <link rel="shortcut icon" href="../src/inventarlogo.png">
</head>
<body onload="populateDropdown();populateDropdownRaum()">
    <?php include '../infoleiste.php'; ?>
	<div class="container">
		<h2>Entfernen / Einfügen</h2>
		<label class="switch">
			<input type="checkbox" checked>
			<span class="slider round"></span>
		</label>
		<h3>Einfügen</h3>
		<div class="line"></div>
		<div class="fields">
			<div id="divDatum">
			<label>Beschaffungsdatum</label>
			<input type="date" id="datum">
			</div>
			<div id="divPreis">
			<label>Preis</label>
			<input type="text" placeholder="Preis" id="preis">
			</div>
			<div id="divSeriennummer">
			<label>Seriennummer</label>
			<input type="text" placeholder="Seriennummer" id="seriennummer">
			</div>
			<div id="divAnmerkung">
			<label>Anmerkung</label>
			<input type="text" placeholder="Anmerkung" id="anmerkung">
			</div>
			<div id="divModell" style="margin-top:30px;">
			<select id="modellDropdown">
			</select>
			</div>
			<div id="divRaumnummer" style="margin-top:30px;">
			<select id="raumDropdown">
			</select>
			</div>
			</div>	
			<div id="divSubmit">
			<button onclick="sendData()" style="margin-top:30px;">Absenden</button>
			</div>
			<div id="divEntfernen">
			<button onclick="sendDataEntfernen()" style="margin-top:30px;">Absenden</button>
			<div id="tabelle">
			<div class="left-table">
			<h2>Inventar</h2>
			<div class="selected-values selected-inventarnummer">&nbsp;</div>
			<div class="selected-values selected-seriennummer">&nbsp;</div>
			<div class="selected-values selected-anmerkung">&nbsp;</div>
			<table id="inventartabelle">
			<thead>
				<tr>
				<th>Inventarnummer</th>
				<th>Seriennummer</th>
				<th>Anmerkung</th>
				</tr>
			</thead>
			<tbody>
				<!-- Hier kommen die Datensätze der Tabelle -->
			</tbody>
			</table>
			</div>
			</div>
			</div>
		</div>
	</div>
<script>
var checkbox = document.querySelector('input[type="checkbox"]');
var heading = document.querySelector('h3');
		document.getElementById("divDatum").style.display = "block";
		document.getElementById("divPreis").style.display = "block";
		document.getElementById("divSeriennummer").style.display = "block";
		document.getElementById("divAnmerkung").style.display = "block";
		document.getElementById("divModell").style.display = "block";
		document.getElementById("divRaumnummer").style.display = "block";
		document.getElementById("divSubmit").style.display = "block";
		document.getElementById("divEntfernen").style.display = "none";
		document.getElementById("tabelle").style.display = "none";
		checkbox.addEventListener('change', function() {
			if(this.checked) {
				heading.innerHTML = 'Einfügen';
				document.getElementById("divDatum").style.display = "block";
				document.getElementById("divPreis").style.display = "block";
				document.getElementById("divSeriennummer").style.display = "block";
				document.getElementById("divAnmerkung").style.display = "block";
				document.getElementById("divModell").style.display = "block";
				document.getElementById("divRaumnummer").style.display = "block";
				document.getElementById("divEntfernen").style.display = "none";
				document.getElementById("divSubmit").style.display = "block";
				document.getElementById("tabelle").style.display = "none";
			} else {
				heading.innerHTML = 'Entfernen';
				document.getElementById("divDatum").style.display = "none";
				document.getElementById("divPreis").style.display = "none";
				document.getElementById("divSeriennummer").style.display = "none";
				document.getElementById("divAnmerkung").style.display = "none";
				document.getElementById("divModell").style.display = "none";
				document.getElementById("divRaumnummer").style.display = "none";
				document.getElementById("divEntfernen").style.display = "block";
				document.getElementById("divSubmit").style.display = "none";
				document.getElementById("tabelle").style.display = "block";
			}
		});
</script>
</body>
</html>
