<?php
$farmer = $_POST['farmer'];
$username = $_POST['username'];
$message = $_POST['message'];

$filepath = "../chat_logs/{$farmer}.txt";

if (!is_dir("../chat_logs")) {
    mkdir("../chat_logs", 0777, true);
}

// Safe and formatted HTML message
$formattedMessage = "<p><span style='color:blue; font-weight:bold;'>{$username}:</span><br>" . htmlspecialchars($message) . "</p>\n";

file_put_contents($filepath, $formattedMessage, FILE_APPEND);
?>
