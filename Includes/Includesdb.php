<?php
$host = "localhost";
$user = "root";
$pass = ""; // Leave blank for default XAMPP
$dbname = "impulse101";

$con = mysqli_connect($host, $user, $pass, $dbname);

// Check connection
if (!$con) {
    die("❌ Connection failed: " . mysqli_connect_error());
} else {
    echo "✅ Connected to the database!";
}
?>
