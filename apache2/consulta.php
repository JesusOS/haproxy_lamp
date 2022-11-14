<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'mysql';

// Database use name
$user = 'frodo';

//database user password
$pass = 'bolson';

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Se puede acceder desde apache2"."<br/>";
    echo "Connected to MySQL server successfully!";
}
?>