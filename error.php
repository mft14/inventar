<link rel="stylesheet" type="text/css" href="src/main.css">


<div class="wronglogin">


    <?php
        echo ' | Eingeloggt als <div class="underlined">' , $_SESSION['username'] , '</div>';
        echo ' | Abteilungs-ID: <div class="underlined">' , $_SESSION['site'] , '</div>';
        echo ' | Session Login: <div class="underlined">' , $_SESSION['logged_in'] , '</div>';
    ?>


<img src="src/error.png" class="pixelart pixelsize">
Falscher Benutzername, Passwort oder Abteilung. <br>Bitte noch einmal versuchen. <br>
<a href="logout.php">Zurück zum Login</a>

</div>
