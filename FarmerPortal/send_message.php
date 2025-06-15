<?php
$farmer = $_POST['farmer']; // Receiving farmer name
$username = $_POST['username'];
$message = $_POST['message'];

$filepath = "../chat_logs/{$farmer}.txt"; // Shared log path

// Create chat_logs folder if not exists
if (!is_dir("../chat_logs")) {
    mkdir("../chat_logs", 0777, true);
}

// Append message
file_put_contents($filepath, "$username: $message\n", FILE_APPEND);
?>
