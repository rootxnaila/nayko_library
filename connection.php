<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$database   = "nayko_library";

$koneksi = mysqli_connect($host, $user, $pass, $database);

if (!$koneksi) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>