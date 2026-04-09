<?php
include 'conexion.php';
if (isset($_GET['id'])) {
    mysqli_query($conn, "DELETE FROM productos WHERE id=".$_GET['id']);
}
header("Location: admin.php");
?>