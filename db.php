<?php
$host = "localhost";  // server name
$user = "root";       // XAMPP default username
$pass = "";           // XAMPP default password is empty
$db   = "php_login_system";  // database name

// Create connection
$conn = mysqli_connect($host, $user, $pass, $db);

// Check connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
// echo "Database connected successfully"; // Optional test
?>
