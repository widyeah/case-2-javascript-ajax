<?php
// Read chat.txt file and return messages as JSON
$messages = file('chat.txt', FILE_IGNORE_NEW_LINES);
$messages_array = [];

foreach ($messages as $message) {
    // Split each line into timestamp, username, and message
    list($username, $messageText ) = explode(' ', $message, 3);
    $messages_array[] = [
        'username' => trim($username),
        'message' => trim($messageText),
    ];
}

header('Content-Type: application/json');
echo json_encode($messages_array);
?>
