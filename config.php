<?php

$servername = "localhost";
$username = "id14501177_happy";
$password = "Vishalsingh@1";
$dbname = "id14501177_test";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Couldn't connect to the Database" . mysqli_connect_error());
}
