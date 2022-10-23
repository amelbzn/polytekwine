<?php
$serverName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "polytekwineDB";


$conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName, 4306);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
