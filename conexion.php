<?php
$host = "10.0.2.79"; 
$user = "admin_cruzazul";
$pass = "Password123!";
$db   = "farmacia_cruzazul";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Error de conexión a la BD: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8");
?>