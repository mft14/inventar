<!DOCTYPE html>
<?php
    session_start();
    // Check if user is logged in
    if(!isset($_SESSION['logged_in']) || $_SESSION['site'] == 'it2') {
      header("Location: ../login.php");
      exit();
    }
?>
<html lang="de">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Abteilung Einkauf/Material</title>
	<link rel="stylesheet" href="personal.css" type="text/css">
    <link rel="shortcut icon" href="../src/inventarlogo.png">
  </head>
  <body>
  <h1>IT Abteilung Einkauf/Material</h1>

<p>IT Abteilung Einkauf/Material</p>

  </body>
</html>
