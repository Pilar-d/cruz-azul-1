<?php
include 'conexion.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $stock = $_POST['stock'];
    $precio = $_POST['precio'];
    
    $sql = "INSERT INTO productos (nombre, stock, precio) VALUES ('$nombre', $stock, $precio)";
    if (mysqli_query($conn, $sql)) {
        header("Location: admin.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>