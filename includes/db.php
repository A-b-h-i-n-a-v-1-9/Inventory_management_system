<?php
$host = 'localhost';
$user = 'root';
$password = 'kalki@19';
$database = 'inventory_db';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>