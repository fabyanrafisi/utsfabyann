<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "utsfabyan";

// Koneksi ke database
$koneksi = mysqli_connect($hostname, $username, $password, $database);

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
