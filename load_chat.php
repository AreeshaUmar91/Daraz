<?php
$chat_file = "chat.txt";

if (file_exists($chat_file) && filesize($chat_file) > 0) {
    echo nl2br(file_get_contents($chat_file)); // Display chat messages
} else {
    echo "<p>No messages yet...</p>";
}
?>
