<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'todo-api'; // change this

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

header('Content-Type: application/json');
?>
