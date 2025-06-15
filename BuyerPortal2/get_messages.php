<?php
$farmer = $_GET["farmer"] ?? "";
$filepath = "../chat_logs/{$farmer}.txt"; // path to chat file

if ($farmer && file_exists($filepath)) {
    // Read contents and output directly as HTML
    $messages = file_get_contents($filepath);
    echo nl2br($messages); // Ensure \n becomes <br> if any plain text sneaks in
} else {
    echo "<p>No messages yet.</p>";
}
?>
