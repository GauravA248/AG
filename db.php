<?php
$host = "localhost";
$user = "root";   // default in XAMPP/WAMP
$pass = "";       // leave empty if no password
$db   = "valet_services";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>
