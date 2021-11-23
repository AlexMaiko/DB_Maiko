<?php

$servername = "localhost";
$username = "Alex";
$pass = "";

$con = new mysqli($servername, $username, $pass);

if($con->connect_error) {
    die("connection failed: " . $con->connect_error);
}

echo "Connection succesfully";