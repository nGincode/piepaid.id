<?php
$servername = "localhost";
$database = "piepaid_backoffice";
$username = "root";
$password = "";
// Create connection
$db1 = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$db1) {
    die("Connection failed: " . mysqli_connect_error());
}

$servername = "localhost";
$database = "piepaid_pos";
$username = "root";
$password = "";
// Create connection
$db2 = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$db2) {
    die("Connection failed: " . mysqli_connect_error());
}
