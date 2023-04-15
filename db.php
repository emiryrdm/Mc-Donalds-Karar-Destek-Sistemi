
<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "mc_donalds";
// Veritabanına bağlan
$conn = mysqli_connect($host, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");
// Bağlantı kontrolü
if (!$conn) {
    die("Bağlantı hatası: " . mysqli_connect_error());
}


?> 