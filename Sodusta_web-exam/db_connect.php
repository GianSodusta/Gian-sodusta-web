<?php
$host = "localhost";
$user = "root";
$pwd = "";
$db_name = "sodusta_database";

// Create database connection
$connect = mysqli_connect($host, $user, $pwd, $db_name);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
