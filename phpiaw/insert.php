<?php
$servername = "mysql";
$username = "frodo";
$password = "bolson";
$dbname = "lamp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO sysadmin (nombre, apellido, email)
VALUES ('jesus', 'ortega', 'jortsanb@g.educaand.es')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>