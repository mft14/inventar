<html>
<head>
<title>Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="src/main.css">

</head>
<body class="bluebackground center">
    <h1 class="fontwhite" style="margin-top: 20px;">Login Inventardatenbank</h1>

    <div class="loginbox">

        <form action="login.php" method="post">

            <label for="username">Benutzername:</label>
            <input type="text" id="username" name="username" class="textfield" required><br><br>

            <label for="password">Passwort:</label>
            <input type="password" id="password" name="password" class="textfield" required><br><br>

            <label for="destination">Abteilung:</label>
            <select id="destination" name="destination" class="textfield" style="height: 60px;">
                <option value="page1.php" id="abtleiter">Abteilungsleiter</option>
                <option value="page2.php" id="itabt">IT Abteilung</option>
                <option value="page3.php" id="itabt2">IT Abteilung (Einkauf/Marketing)</option>
                <option value="page4.php" id="personal">Personalabteilung</option>
            </select><br><br>
            <button type="submit" class="loginbutton">Anmelden</button>
        </form>

    </div>
</body>
</html>
