<?php
require 'db.php';

$data = json_decode(file_get_contents("php://input"));

if (isset($data->id)) {
    $id = intval($data->id);
    $title = isset($data->title) ? $conn->real_escape_string($data->title) : null;
    $completed = isset($data->completed) ? intval($data->completed) : null;

    $updates = [];

    if ($title !== null) $updates[] = "title = '$title'";
    if ($completed !== null) $updates[] = "completed = $completed";

    if (count($updates) > 0) {
        $sql = "UPDATE todos SET " . implode(", ", $updates) . " WHERE id = $id";

        if ($conn->query($sql)) {
            echo json_encode(["message" => "Task updated"]);
        } else {
            http_response_code(500);
            echo json_encode(["error" => $conn->error]);
        }
    } else {
        http_response_code(400);
        echo json_encode(["error" => "No update fields provided"]);
    }
} else {
    http_response_code(400);
    echo json_encode(["error" => "ID is required"]);
}
?>
