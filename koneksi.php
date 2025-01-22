<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "digital_library_inshe";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("koneksi gagal: ". $conn->connect_error);
} else {
    echo "Berhasil";
}
?>