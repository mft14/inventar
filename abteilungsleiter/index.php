<!DOCTYPE html>
<?php
    session_start();
    // Check if the user is logged in
    if (!isset($_COOKIE['loggedin']) || $_COOKIE['loggedin'] != 'true' || $_SESSION['role'] != 'abt') {
      header("Location: ../login.php"); // Redirect the user to the login page
      exit();
    }
?>

<html lang="de">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abteilungsleiter</title>
	<link rel="stylesheet" href="personal.css" type="text/css">
    <link rel="shortcut icon" href="../src/inventarlogo.png">
    <link rel="stylesheet" href="../src/main.css" type="text/css">
  </head>
  <body>

    <?php include '../infoleiste.php'; ?>


  <h1>Abteilungsleiter</h1>

<p>Hier sehen sie Abteilungsleiter Sachen</p>

  </body>
</html>
