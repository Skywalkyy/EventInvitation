<?php
$server = "localhost";
$user = "root";
$password = ""; 
$database = "event_invation";

$db = mysqli_connect($server, $user, $password, $database);

if (!$db) {
    die("Gagal terhubung ke database: " . mysqli_connect_error());
}
?>
