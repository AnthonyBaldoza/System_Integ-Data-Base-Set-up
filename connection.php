<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "bsit3";

$conn = new mysqli(
    $host,
    $username,
    $password,
    $database
);

if($conn->connect_error){
    die("Database connection Failed");
}


?>
