<?php
file_put_contents("chat.txt", ""); // Clear the chat file
echo json_encode(["status" => "Chat deleted"]);
?>
