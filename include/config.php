<?php
$servername = "localhost"; // Assuming your database is on the same server
$database = "u119271849_tb_spark";
$username = "u119271849_user_spark";
$password = "Admin@#54321";

// Create connection
$con = new mysqli($servername, $username, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
date_default_timezone_set('Asia/Kolkata');

$currentDateTime = date('d-m-Y H:i:s');

?>