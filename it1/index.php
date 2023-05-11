<!DOCTYPE html>
<?php
    session_start();
    // Check if user is logged in
    if(!isset($_SESSION['logged_in']) || $_SESSION['site'] == 'it1') {
      header("Location: ../login.php");
      exit();
    }
?>
<html lang="de">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Abteilung</title>
	<link rel="stylesheet" href="personal.css" type="text/css">
    <link rel="stylesheet" href="../src/main.css" type="text/css">
    <link rel="shortcut icon" href="../src/inventarlogo.png">
  </head>
  <body>
    <?php include '../infoleiste.php'; ?>
  <h1>IT Abteilung</h1>

    <p>Hier ist die IT Abteilung</p>

  </body>
</html>
