<?php
session_start();

// Step 1: Connect to Database
$conn = mysqli_connect("localhost", "root", "1Welcome!", "credentials");

    if ($mysqli->connect_errno) {
        echo "Konnte Verbindung zu MySQL nicht herstellen: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

// Step 2: Validate User Input
$username = $_POST['username'];
$password = $_POST['password'];
$site = $_POST['site'];

if(empty($username) || empty($password)) {
    die('Please enter a username and password 
    <a href="logout.php">Zurück zum Login</a>');
}

// Step 3: Check if User Exists in Database
$query = "SELECT * FROM logins WHERE username='$username' AND password='$password' AND site='$site'";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) == 0) {
    die('Falscher Benutzername, Passwort oder Abteilung. Bitte noch einmal versuchen. 
        <a href="logout.php">Zurück zum Login</a>');
}

// Step 4: Set Session Variables
$_SESSION['logged_in'] = true;
$_SESSION['site'] = $site;

// Step 5: Redirect to Selected Site
switch($site) {
  case "site1":
    $url = "http://localhost:8000/home.php?abtleiter";
    break;
  case "site2":
    $url = "http://localhost:8000/home.php?it";
    break;
  case "site3":
    $url = "http://localhost:8000/home.php?it2";
    break;
  case "site4":
    $url = "http://localhost:8000/pages/personal/personal.html";
    break;
  default:
    die("Invalid site selected");
}

header("Location: $url");

// Step 6: Authenticate User
// Authenticate user on selected site using stored login credentials

// Step 7: Redirect to Selected Site's Dashboard
// Redirect user to selected site's dashboard if authentication is successful
?>

