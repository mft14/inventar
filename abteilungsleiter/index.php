<!DOCTYPE html>
<?php
    session_start();
    // Check if user is logged in
    if(!isset($_SESSION['logged_in']) || $_SESSION['site'] == 'abt') {
      header("Location: ../login.php");
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
  </head>
  <body>
  <h1>Abteilungsleiter</h1>

<p>Hier sehen sie Abteilungsleiter Sachen</p>

  </body>
</html>
