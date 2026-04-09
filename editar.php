<?php
include 'conexion.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id']; $n = $_POST['nombre']; $p = $_POST['precio']; $s = $_POST['stock'];
    mysqli_query($conn, "UPDATE productos SET nombre='$n', precio=$p, stock=$s WHERE id=$id");
    header("Location: admin.php");
}
$row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM productos WHERE id=".$_GET['id']));
?>
<form method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>">
    <input type="number" name="precio" value="<?php echo $row['precio']; ?>">
    <input type="number" name="stock" value="<?php echo $row['stock']; ?>">
    <button type="submit">Actualizar</button>
</form>