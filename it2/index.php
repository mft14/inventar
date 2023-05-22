<!DOCTYPE html>
<?php
    // Check if the user is logged in
    if (!isset($_COOKIE['loggedin']) || $_COOKIE['loggedin'] != 'true') {
      // Redirect the user to the login page
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
    <link rel="stylesheet" href="../src/main.css" type="text/css">
    <link rel="shortcut icon" href="../src/inventarlogo.png">
  </head>
  <body>

    <?php include '../infoleiste.php'; ?>

  <h1>IT Abteilung Einkauf/Material</h1>

<p>IT Abteilung Einkauf/Material</p>

  </body>
</html>
