<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "himalaya2";

// Create connection
$connect = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connect->connect_error) {
    die("Connection failed");
}
// echo "Connected successfully";
?>