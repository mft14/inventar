<html>
<body class="bluebackground">
<link rel="stylesheet" type="text/css" href="src/main.css">
<link rel="shortcut icon" href="src/inventarlogo.svg">

    <h1 style="margin: 10px 0px 20px 0px;" class="center fontwhite">Inventardatenbank</h1>
    <div class="loginbox">
        <form method="post" action="">

            <div><input type="text" class="textbox" id="username" name="username" pattern="[A-Za-z0-9]+" placeholder="Username" required /></div>
            <br>
            <div><input type="password" class="textbox" id="password" name="password" pattern="[A-Za-z0-9]+" placeholder="Password" required /></div>

        <div class="radiobox">

<table class="radiotable">
    <tr>
        <td><label for="abt">ABT</label></td>
        <td><input class="radio" type="radio" id="abt" name="role" value="abt" checked></td>
        <td class="placeholderradio"></td>
        <td><label for="it">IT1</label></td>
        <td><input class="radio" type="radio" id="it1" name="role" value="it1"></td>
    </tr>
    <tr>
        <td><label for="pers">PER</label></td>
        <td><input class="radio" type="radio" id="pers" name="role" value="pers"></td>
        <td class="placeholderradio"></td>
        <td><label for="it2">IT2</label></td>
        <td><input class="radio" type="radio" id="it2" name="role" value="it2"></td>
    </tr>
</table>

            <div> <input type="submit" class="loginbutton" value="Einloggen" name="submit" id="submit" /> </div>
        </div>


<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$db = "credentials";

try { //Connection Fehler abfangen
    $connection = mysqli_connect($host, $user, $password, $db);

    if ($connection->connect_error) {
        throw new Exception("Es konnte keine Verbindung aufgebaut werden.");
    }

    if(isset($_POST['submit'])){

        // Escape special characters in a string
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        $role = mysqli_real_escape_string($connection, $_POST['role']);

        // If username and password are not empty
        if ($username != "" && $password != ""){

            // Query database to find user with matching username and password
            $query = "select count(*) as cntUser from logins where username='".$username."' and password='".$password."' and role='".$role."'  ";
            $result = mysqli_query($connection, $query); // Store query result
            $row = mysqli_fetch_array($result); // Fetch row as associative array
            $count = $row['cntUser']; // Get number of rows

            if($count > 0){ // If number of row is more than zero
                $_SESSION['uname'] = $username; // Set matched user as current user
                $_SESSION['passw'] = $password; // Set matched user as current user
                $_SESSION['role'] = $role;
                setcookie('loggedin', 'true', time() + (86400 * 30), "/"); // Expires in 30 days

                switch($role) {
                case "abt":
                    $url = "abteilungsleiter/index.php";
                    break;
                case "it1":
                    $url = "it1/index.php";
                    break;
                case "it2":
                    $url = "it2/index.php";
                    break;
                case "pers":
                    $url = "personal/index.php";
                    break;
                default:
                    die("Invalid site selected");
                }

                header("Location: $url");

            } else {
                echo '<div class="error">Falscher Benutzername oder Passwort</div>'; // Display failed message
            }
        }
    }

//Fehlermeldung
} catch (Exception $e) {
    echo "<div class='error'><b>Database error</b><br>";
    echo $e->getMessage() . "</div>"; 
    error_log("Database Connection Error: " . $e->getMessage()); //ins log schreiben
}

$connection->close(); //Datenbank immer schließen

?>
        <!---------- Formular Ende hier ---------->
        </form>
    </div>

</body>
</html>

