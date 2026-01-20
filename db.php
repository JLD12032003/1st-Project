<?php
$servername = "localhost";     // XAMPP default server
$db_username = "root";         // XAMPP default username
$db_password = "";             // XAMPP default password is empty
$dbname = "iskolar_4.0";       // your database name (no spaces, underscore + dot is fine)

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>