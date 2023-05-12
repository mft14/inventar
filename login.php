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

/* print "Given username: $username"; */
/* print "Given password: $password"; */
/* print "Given site: $site"; */

/* if(empty($username) || empty($password)) { */
/*     die('Please enter a username and password */ 
/*     <a href="logout.php">Zurück zum Login</a>'); */
/* } */

// Step 3: Check if User Exists in Database
$query = "SELECT * FROM logins WHERE username='$username' AND password='$password' AND site='$site'";
$result = mysqli_query($connection, $query);

/* Fehlermeldung */
if(mysqli_num_rows($result) == 0) {
    $_SESSION['site'] = $site;
    $_SESSION['username'] = $username;
    include 'error.php';
}

// Step 4: Set Session Variables
$_SESSION['logged_in'] = true;
$_SESSION['site'] = $site;
$_SESSION['username'] = $username;

// Step 5: Redirect to Selected Site
switch($site) {
  case "abt":
    $url = "http://localhost:8000/abteilungsleiter/index.php";
    break;
  case "it1":
    $url = "http://localhost:8000/it1/index.php";
    break;
  case "it2":
    $url = "http://localhost:8000/it2/index.php";
    break;
  case "pers":
    $url = "http://localhost:8000/personal/index.php";
    break;
  default:
    die("Invalid site selected");
}

header("Location: $url");

?>
</body>
