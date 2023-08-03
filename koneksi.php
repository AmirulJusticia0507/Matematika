<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "matematika_db";

$koneksiku = new mysqli($servername, $username, $password, $dbname);
if ($koneksiku->connect_error) {
    die("Koneksi ke database gagal: " . $koneksiku->connect_error);
}
?>
