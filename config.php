<?php

$server = "localhost";
$username = "root";
$password = "password123";
$database = "shorturl";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}

?>
