<?php
$farmer = $_GET["farmer"] ?? "";
$filepath = "../chat_logs/{$farmer}.txt"; // path adjusted to shared location

if ($farmer && file_exists($filepath)) {
    echo file_get_contents($filepath);
} else {
    echo "No messages yet.";
}
?>



