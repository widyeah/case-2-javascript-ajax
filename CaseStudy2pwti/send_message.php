<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get username and message from POST data
    $username = $_POST['username'];
    $message = $_POST['message'];

    // Get current timestamp
    $timestamp = date('Y-m-d H:i:s');

    // Format message with timestamp
    $data = "$username $message $timestamp \n";

    // Save message to chat.txt file
    file_put_contents('chat.txt', $data, FILE_APPEND);

}
?>
