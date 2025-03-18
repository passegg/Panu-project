<?php
$server = "localhost";
$username = "root";
$passwrod = "";
$db = "user_account";

$conn = new mysqli($server, $username, $passwrod, $db);
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}

header('location: #');
?>