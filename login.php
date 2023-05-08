<body class="bluebackground">
<?php
session_start();

// Step 1: Connect to Database
$connection = mysqli_connect("localhost", "root", "1Welcome!", "credentials");

    if ($connection->connect_errno) {
        echo "Konnte Verbindung zu MySQL nicht herstellen: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

// Step 2: Validate User Input
$username = $_POST['username'];
$password = $_POST['password'];
$site = $_POST['site'];

/* if(empty($username) || empty($password)) { */
/*     die('Please enter a username and password */ 
/*     <a href="logout.php">Zurück zum Login</a>'); */
/* } */

// Step 3: Check if User Exists in Database
$query = "SELECT * FROM logins WHERE username='$username' AND password='$password' AND site='$site'";
$result = mysqli_query($connection, $query);

if(mysqli_num_rows($result) == 0) {
    die('<link rel="stylesheet" type="text/css" href="src/main.css"><div class="wronglogin"><img src="src/error.png" class="pixelart pixelsize">Falscher Benutzername, Passwort oder Abteilung. <br>Bitte noch einmal versuchen. <br>
        <a href="logout.php">Zurück zum Login</a></div>');
}

// Step 4: Set Session Variables
$_SESSION['logged_in'] = true;

// Step 5: Redirect to Selected Site
switch($site) {
  case "abt":
    $url = "http://localhost:8000/abteilungsleiter/index.php";
    $_SESSION['site'] = 'abt';
    break;
  case "it1":
    $url = "http://localhost:8000/itabteilung1/index.php";
    $_SESSION['site'] = 'it1';
    break;
  case "it2":
    $url = "http://localhost:8000/itabteilung2/index.php";
    $_SESSION['site'] = 'it2';
    break;
  case "pers":
    $url = "http://localhost:8000/personal/index.php";
    $_SESSION['site'] = 'pers';
    break;
  default:
    die("Invalid site selected");
}

header("Location: $url");

?>
</body>
