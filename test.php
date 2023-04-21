<h1>Test</h1>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventarTest";

$sql = "SELECT * FROM itabteilung";
$result = $conn->query($sql);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "Connection Error";
}

if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th><th>Vorname</th></tr>";
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["vorname"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

$conn->close();

?>

