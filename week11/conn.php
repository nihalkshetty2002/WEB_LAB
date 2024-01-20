<?php
$host = "localhost";
$db_name = "dblab";
$username = "root";
$password = "";

$mysqli = new mysqli($host, $username, $password, $db_name);

if (mysqli_connect_errno()) {
    echo "Error: Could not connect to database.";
    exit;
} else
    echo "Connected to database.";
?>