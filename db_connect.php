<?php
$servername = "localhost";
$Username = "root";
$Password = "";
$database = "issue_log";

// Create connection
$con = mysqli_connect($servername, $Username, $Password, $database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>