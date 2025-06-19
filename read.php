<?php
require 'db.php';

$sql = "SELECT * FROM todos ORDER BY id DESC";
$result = $conn->query($sql);

$todos = [];

while ($row = $result->fetch_assoc()) {
    $todos[] = $row;
}

echo json_encode($todos);
?>
