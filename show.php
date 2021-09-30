<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "id17584379_root";
$password = "iTWdyTU!16hyUdby";
$dbname = "id17584379_piratheep";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `name`, `email`, `text` FROM `shanu`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> name: ". $row["name"]. " - email: ". $row["email"]. " " . $row["text"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
