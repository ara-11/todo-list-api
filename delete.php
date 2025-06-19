<?php
require 'db.php';

$data = json_decode(file_get_contents("php://input"));

if (isset($data->id)) {
    $id = intval($data->id);
    $sql = "DELETE FROM todos WHERE id = $id";

    if ($conn->query($sql)) {
        echo json_encode(["message" => "Task deleted"]);
    } else {
        http_response_code(500);
        echo json_encode(["error" => $conn->error]);
    }
} else {
    http_response_code(400);
    echo json_encode(["error" => "ID is required"]);
}
?>
