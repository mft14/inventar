<h1 class="title">Personalabteilung</h1>

<?php
    $mysqli = new mysqli("localhost", "mf13", "1Welcome!", "inventarTest");

    if ($mysqli->connect_errno) {
        echo "Konnte Verbindung zu MySQL nicht herstellen: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    $res = $mysqli->query("SELECT * FROM personal");
    $res->data_seek(0);

    echo "<table class=\"table\">";
    echo "<thead><th>Personalnummer</th><th>Name</th><th>Vorname</th><th>Abteilung</th>";

    while ($row = $res->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['personalnummer'] . "</td><td>" . $row['name'] . "</td><td>" . $row['vorname'] . "</td><td>" . $row['abteilung'] . "</td>";
        echo "</tr>";
    }

        echo "</table>";

?>

