<html>
<body class="bluebackground">
<link rel="stylesheet" type="text/css" href="src/main.css">

            <h1 style="margin: 10px 0px 20px 0px;" class="center fontwhite">Inventardatenkbank</h1>
    <div class="loginbox">
        <form method="post" action="">

            <div> <input type="text" class="textbox" id="username" name="username" placeholder="Username" /> </div>
<br>
            <div> <input type="password" class="textbox" id="password" name="password" placeholder="Password"/> </div>

        <div class="radiobox">
            <label for="abt">ABT:</label>
            <input class="radio" type="radio" id="abt" name="role" value="abt" checked>

            <label for="it">IT:</label>
            <input class="radio" type="radio" id="it1" name="role" value="it1">

            <label for="it2">IT2:</label>
            <input class="radio" type="radio" id="it2" name="role" value="it2">

            <label for="pers">Pers:</label>
            <input class="radio" type="radio" id="pers" name="role" value="pers">

            <div> <input type="submit" class="loginbutton" value="Einloggen" name="submit" id="submit" /> </div>
        </div>

        <?php
        session_start();
        $host = "localhost";
        $user = "root";
        $password = "1Welcome!";
        $db = "credentials";

        $connection = mysqli_connect($host, $user, $password, $db);

        if (!$connection) { die("Connection failed: " . mysqli_connect_error()); }

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

                    // Else if number of row is less than zero
                } else {
                    echo '<div class="error">Error! <br>Falscher Benutzername oder Passwort</div>'; // Display failed message
                }
            }
        }
        ?>

        <!---------- Formular Ende hier ---------->
        </form>
    </div>

</body>
</html>

