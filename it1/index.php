<!DOCTYPE html>
<?php
    session_start();
    // Check if the user is logged in
    if (!isset($_COOKIE['loggedin']) || $_COOKIE['loggedin'] != 'true' || $_SESSION['role'] != 'it1') {
      header("Location: ../login.php"); // Redirect the user to the login page
      exit();
    }
?>
<html>
<head>
<meta charset="utf-8">
  <title>Asset-Management</title>
  <link rel="stylesheet" href="../src/main.css" type="text/css">
  <link rel="shortcut icon" href="../src/inventarlogo.png">
  <link rel="stylesheet" href="itab2.css"> <!-- Verweis auf die CSS-Datei -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="itab.js"></script>
</head>
<body>
<?php include '../infoleiste.php'; ?>

<div class="date-range">
  <h3><label for="von">Von:</label></h3>
  <input type="date" id="von" name="von">
  <h3><label for="bis">Bis:</label></h3>
  <input type="date" id="bis" name="bis">
</div>
<div>
<div class="button-container">
  <button onclick="sendData()" style="margin-top:40px;">Absenden</button>
  </div>
  </div>
  <div class="left-table">
    <h2>Inventar</h2>
	<div class="selected-values selected-inventarnummer">&nbsp;</div>
	<div class="selected-values selected-bezeichnung">&nbsp;</div>
	<div class="selected-values selected-beschreibung">&nbsp;</div>
    <table id="inventartabelle">
      <thead>
        <tr>
          <th>Inventarnummer</th>
          <th>Bezeichnung</th>
          <th>Beschreibung</th>
        </tr>
      </thead>
      <tbody>
        <!-- Hier kommen die Datensätze der linken Tabelle -->
      </tbody>
    </table>
  </div>
  <div class="right-table">
    <h2>Personal</h2>
	<div class="selected-values selected-personalnummer">&nbsp;</div>
	<div class="selected-values selected-name">&nbsp;</div>
	<div class="selected-values selected-vorname">&nbsp;</div>
    <table id="personaltabelle">
	<thead>
	<tr>
      <th>Personalnummer</th>
      <th>Name</th>
      <th>Vorname</th>
      <th>Bezeichnung</th>
    </tr>
  </thead>
  <tbody>
    <!-- Hier kommen die Datensätze der rechten Tabelle -->
  </tbody>
</table>

  </div>
</body>
</html>
