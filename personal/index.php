<!DOCTYPE html>
<?php
    session_start();
    // Check if user is logged in
    if(!isset($_SESSION['logged_in']) && $_SESSION['site'] != 'pers') {
      header("Location: ../login.php");
      exit();
    }
?>

<html lang="de">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalverwaltung</title>
    <link rel="stylesheet" href="personal.css" type="text/css">
    <link rel="shortcut icon" href="../src/inventarlogo.png">
  </head>
  <body>
  <h1>Personalverwaltung</h1>


<?php
    echo "Eingeloggt als " , $_SESSION['username'];
?>
<a href="../logout.php" style="text-align: right;">Logout</a>




<h2>Bitte wählen Sie die CSV-Datei aus</h2>
<form action="personal.php" method="post" enctype="multipart/form-data">
    <label> Hier die CSV-Datei auswählen: <input name="file" type="file" size="50" accept=".csv"> </label>
    <input type="submit" value="Upload" method="post" action="personal.php" name="file">
</form>
  </body>
</html>
