<?php
require 'db.php';

$data = json_decode(file_get_contents("php://input"));

if (!empty($data->title)) {
    $title = $conn->real_escape_string($data->title);
    $sql = "INSERT INTO todos (title) VALUES ('$title')";

    if ($conn->query($sql)) {
        echo json_encode(["message" => "Task created"]);
    } else {
        http_response_code(500);
        echo json_encode(["error" => $conn->error]);
    }
} else {
    http_response_code(400);
    echo json_encode(["error" => "Title is required"]);
}
?>
